<?php

use App\Modules\Categories\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
| Categories module API routes.
|
| CategoriesServiceProvider already adds the "/api" prefix and the
| "api" middleware group, so paths here start at "categories".
*/

Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories/{id}', [CategoryController::class, 'show'])->whereNumber('id');
Route::match(['put', 'patch'], 'categories/{id}', [CategoryController::class, 'update'])->whereNumber('id');
Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->whereNumber('id');
