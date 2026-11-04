<?php

use Illuminate\Support\Facades\Route;

/*
| Categories module API routes.
|
| CategoriesServiceProvider already adds the "/api" prefix and the
| "api" middleware group, so paths here start at "categories".
*/

// Temporary: proves the module's routes are registered. Removed in Stage 4.
Route::get('categories/ping', function () {
    return response()->json([
        'module' => 'categories',
        'status' => 'ok',
    ]);
});
