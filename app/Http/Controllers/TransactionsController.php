<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = Transactions::all();
        return response()->json($transactions);
    }

    public function show($id)
    {
        $transaction = Transactions::findOrFail($id);
        return response()->json($transaction);
    }

    public function store(Request $request)
{
    try {
        $validatedData = $request->validate([
            'product_id' => 'exists:products,id',
            'jumlah_terjual' => 'numeric',
            'tanggal_transaksi' => 'date',
            'categories_id' => 'exists:categories,id',
        ]);

        $product = Products::findOrFail($validatedData['product_id']);
        $stockReduction = $validatedData['jumlah_terjual'];
        if ($product->stock < $stockReduction) {
            return response()->json(['error' => 'Not enough stock available'], 400);
        }

        DB::beginTransaction();

        $product->stock -= $stockReduction;
        $product->save();

        $transaction = Transactions::create([
            'product_id' => $product->id,
            'jumlah_terjual' => $stockReduction,
            'tanggal_transaksi' => $validatedData['tanggal_transaksi'],
            'categories_id' => $validatedData['categories_id'],
        ]);

        DB::commit();

        $updatedProduct = Products::findOrFail($validatedData['product_id']);

        return response()->json([
            'transaction' => $transaction,
            'Product' => $updatedProduct
        ], 201);
    } catch (\Throwable $th) {
        DB::rollBack();
        return response()->json($th->getMessage(), 500);
    }
}



public function update(Request $request, $id)
{
    try {
        $validatedData = $request->validate([
            'product_id' => 'exists:products,id',
            'jumlah_terjual' => 'numeric',
            'tanggal_transaksi' => 'date',
        ]);

        $transaction = Transactions::findOrFail($id);
        $previousAmountSold = $transaction->jumlah_terjual;
        $newAmountSold = $validatedData['jumlah_terjual'];
        $product = Products::findOrFail($validatedData['product_id']);

        DB::beginTransaction();

        $product->stock += $previousAmountSold;
        if ($product->stock < $newAmountSold) {
            return response()->json(['error' => 'Not enough stock available'], 400);
        }
        $stockDifference = $previousAmountSold - $newAmountSold;
        $product->stock -= $stockDifference;

        $product->save();

        $transaction->update([
            'product_id' => $product->id,
            'jumlah_terjual' => $newAmountSold,
            'tanggal_transaksi' => $validatedData['tanggal_transaksi'],
        ]);
        DB::commit();

        $updatedProduct = Products::findOrFail($validatedData['product_id']);

        return response()->json([
            'transaction' => $transaction,
            'updated_product' => $updatedProduct
        ]);
    } catch (\Throwable $th) {
        DB::rollBack();
        return response()->json($th->getMessage(), 500);
    }
}

    public function destroy($id)
    {
        Transactions::destroy($id);
        return response()->json(['message' => 'Transaction deleted successfully']);
    }

    public function sort(Request $request)
    {
    $sortBy = $request->input('sortBy');

    $transactions = Transactions::orderBy($sortBy)->get();

    return response()->json($transactions);
    }

    public function search(Request $request)
{
    try {
        $keyword = $request->input('keyword');

        $transactions = Transactions::whereHas('product', function ($query) use ($keyword) {
            $query->where('name', 'like', "%$keyword%");
        })->orWhere('tanggal_transaksi', 'like', "%$keyword%")->get();

        if ($transactions->isEmpty()) {
            return response()->json(['message' => 'No transactions found for the given keyword.'], 200);
        }


        return response()->json($transactions);
    } catch (\Throwable $th) {
        return response()->json(['error' => $th->getMessage()], 500);
    }
}

    public function compareProductSales(Request $request)
    {
    $type = $request->input('type');

    $query = Transactions::select('product_id', DB::raw('SUM(jumlah_terjual) as total_sales'))
                ->groupBy('product_id')
                ->orderBy('total_sales', $type === 'highest' ? 'desc' : 'asc')
                ->first();

    if ($query) {
        $productId = $query->product_id;
        $product = Products::findOrFail($productId);
        $totalSales = $query->total_sales;

        return response()->json([
            'product_name' => $product->name,
            'total_sales' => $totalSales,
        ]);
    } else {
        return response()->json(['message' => 'No transactions found.']);
    }
    }

    public function compareProductSalesByDate(Request $request)
    {
    $type = $request->input('type');
    $start = $request->input('start_date');
    $end = $request->input('end_date');

    $query = Transactions::select('product_id', DB::raw('SUM(jumlah_terjual) as total_sales'))
                ->whereBetween('tanggal_transaksi', [$start, $end])
                ->groupBy('product_id')
                ->orderBy('total_sales', $type === 'highest' ? 'desc' : 'asc')
                ->first();

    if ($query) {
        $productId = $query->product_id;
        $product = Products::findOrFail($productId);
        $totalSales = $query->total_sales;

        return response()->json([
            'product_name' => $product->name,
            'total_sales' => $totalSales,
        ]);
    } else {
        return response()->json(['message' => 'No transactions found within the specified date range.']);
    }
    }


}
