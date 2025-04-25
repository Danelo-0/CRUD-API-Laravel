<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Requests\ProductCategoryRequest;

class ProductCategoryController extends Controller
{
    public function index()
    {

        $categories = ProductCategory::whereNull('parent_id')->with('children.children')->paginate(6);

        return response()->json($categories);
    }

    public function store(ProductCategoryRequest $request)
    {
        $category = ProductCategory::create($request->all());


        return response()->json($category->fresh('parent.parent'), 201);
    }

    public function show(string $id)
    {
        $category = ProductCategory::with('children.children')->findOrFail($id);
        return response()->json($category);
    }

    public function update(ProductCategoryRequest $request, string $id)
    {
        $category = ProductCategory::findOrFail($id);

        $category->update($request->all());
        return response()->json($category->fresh('parent.parent'), 200);
    }

    public function destroy(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        $category->delete();

        return response()->json(['message' => 'Категория удалена'], 200);
    }

    public function categoriesWithProducts($id)
    {
  
        $category = ProductCategory::with([
            'products',
            'children.products',
            'children.children.products',
            'children.children.children.products'
        ])->findOrFail($id);

        return response()->json($category);
    }
}
