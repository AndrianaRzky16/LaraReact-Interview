<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TransactionsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::prefix('')->group(function () {
    Route::get('/categories', [CategoriesController::class, 'index']);
    Route::post('/categories', [CategoriesController::class, 'store']);
    Route::get('/categories/{id}', [CategoriesController::class, 'show']);
    Route::put('/categories/{id}', [CategoriesController::class, 'update']);
    Route::delete('/categories/{id}', [CategoriesController::class, 'destroy']);

    Route::get('/products', [ProductsController::class, 'index']);
    Route::post('/products', [ProductsController::class, 'store']);
    Route::get('/products/{id}', [ProductsController::class, 'show']);
    Route::put('/products/{id}', [ProductsController::class, 'update']);
    Route::delete('/products/{id}', [ProductsController::class, 'destroy']);

    Route::get('/transactions', [TransactionsController::class, 'index']);
    Route::post('/transactions', [TransactionsController::class, 'store']);
    Route::get('/transactions/{id}', [TransactionsController::class, 'show']);
    Route::put('/transactions/{id}', [TransactionsController::class, 'update']);
    Route::delete('/transactions/{id}', [TransactionsController::class, 'destroy']);
    Route::post('/transactions/sort', [TransactionsController::class, 'sort']);
    Route::get('/transactions/search', [TransactionsController::class, 'search']);
    Route::post('/transactions/compare-sales', [TransactionsController::class, 'compareProductSales']);
    Route::post('/transactions/compare-sales-by-date', [TransactionsController::class, 'compareProductSalesByDate']);
});
