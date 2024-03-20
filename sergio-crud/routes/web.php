<?php

use App\Http\Controllers\CategoryController;

use Illuminate\Support\Facades\Route;

Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/create', [CategoryController::class, 'create']);
Route::post('categories/create', [CategoryController::class, 'store']);
Route::get('categories/{id}/edit/', [CategoryController::class, 'edit']);
Route::put('categories/{id}/edit/', [CategoryController::class, 'update']);
Route::get('categories/{id}/delete/', [CategoryController::class, 'destroy']);
Route::get('categories/{id}/details', [CategoryController::class, 'show']);


Route::get('/', function() {
    return view('welcome');
});                 


