<?php

use Illuminate\Support\Facades\Route;

/*
| Products module API routes.
|
| ProductsServiceProvider already adds the "/api" prefix and the
| "api" middleware group, so paths here start at "products".
*/

// Temporary: proves the module's routes are registered. Removed in Stage 5.
Route::get('products/ping', function () {
    return response()->json([
        'module' => 'products',
        'status' => 'ok',
    ]);
});
