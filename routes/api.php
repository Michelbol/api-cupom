<?php

use App\Http\Controllers\Api\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('shopList', [ShopController::class, 'shopList']);
Route::get('shopDetails/{shop}', [ShopController::class, 'shopDetails']);
