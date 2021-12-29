<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\DisheCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Restaurant
Route::get('/restaurants', [RestaurantController::class, 'restaurantShow']);

// Dishes
Route::get('/dishes', [DishesController::class, 'dishesShow']);

// Dishes Category
Route::get('/categorys', [DisheCategoryController::class, 'categorysShow']);
