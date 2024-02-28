<?php

namespace App\Http\Controllers;

use App\Models\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return response()->json($products);
    }

    public function show($id)
    {
        $products = Products::find($id);
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $products = Products::create($request->all());
        return response()->json($products);
    }

    public function update(Request $request, $id)
    {
        $products = Products::find($id);
        $products->update($request->all());
        return response()->json($products);
    }

    public function destroy($id)
    {
        $products = Products::find($id);
        $products->delete();
        return response()->json($products);
    }
}
