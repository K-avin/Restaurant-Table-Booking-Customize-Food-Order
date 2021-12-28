<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'Dashboard'])->name('dashboard.index');

// Restaurant
Route::get('/restaurants', [App\Http\Controllers\AdminController::class, 'restaurantIndex'])->name('restaurant.index');
Route::get('/restaurant/add', [App\Http\Controllers\AdminController::class, 'addRestaurant'])->name('restaurant.add');

// Orders
Route::get('/orders', [App\Http\Controllers\AdminController::class, 'ordersIndex'])->name('orders.index');

// Dishes
Route::get('/dishes', [App\Http\Controllers\AdminController::class, 'dishesIndex'])->name('dishes.index');
Route::get('/dishe/add', [App\Http\Controllers\AdminController::class, 'addDishes'])->name('dishes.add');

// Customers
Route::get('/customers', [App\Http\Controllers\AdminController::class, 'customersIndex'])->name('customer.index');

// Tables
Route::get('/tables', [App\Http\Controllers\AdminController::class, 'tablesIndex'])->name('table.index');
Route::get('/table/add', [App\Http\Controllers\AdminController::class, 'addTable'])->name('table.add');