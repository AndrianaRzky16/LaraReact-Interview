<?php

namespace App\Http\Controllers;

use App\Models\Categories;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return response()->json($categories);
    }

    public function show($id)
    {
        $categories = Categories::findOrFail($id);
        return response()->json($categories);
    }


    public function store(Request $request)
    {
        $categories = Categories::create($request->all());
        return response()->json($categories);
    }

    public function update(Request $request, $id)
    {
        $categories = Categories::find($id);
        $categories->update($request->all());
        return response()->json($categories);
    }

    public function destroy($id)
    {
        $categories = Categories::find($id);
        $categories->delete();
        return response()->json($categories);
    }
}
