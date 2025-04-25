<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\ProductCategoryController;
use App\Http\Controllers\API\ProductController;


Route::apiResource('product-categories', ProductCategoryController::class);
Route::apiResource('products', ProductController::class);

Route::get('product-categories/{id}/products', [ProductCategoryController::class, 'categoriesWithProducts']);