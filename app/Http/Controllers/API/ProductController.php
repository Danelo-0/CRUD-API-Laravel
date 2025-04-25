<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(6);

        return response()->json($products);
    }

    public function store(ProductRequest $request)
    {

        $product = Product::create($request->all())->fresh('category');

        return response()->json($product, 201);
    }

    public function show(string $slug)
    {
        $products = Product::with('category')->where('slug', $slug)->firstOrFail();

        return response()->json($products);
    }

    public function update(ProductRequest $request, string $slug)
    {
        $product = Product::with('category')->where('slug', $slug)->firstOrFail();

        $product->update($request->all());
        return response()->json($product->fresh('category'));
    }

    public function destroy(string $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $product->delete();

        return response()->json(['message' => 'Продукт удалён'], 200);
    }
}
