<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'Dashboard'])->name('dashboard.index')->middleware('auth');

// Restaurant
Route::get('/restaurants', [App\Http\Controllers\AdminController::class, 'restaurantIndex'])->name('restaurant.index')->middleware('auth');;
Route::get('/restaurant/add', [App\Http\Controllers\AdminController::class, 'addRestaurant'])->name('restaurant.add')->middleware('auth');;

// Orders
Route::get('/orders', [App\Http\Controllers\AdminController::class, 'ordersIndex'])->name('orders.index')->middleware('auth');;

// Dishes
Route::get('/dishes', [App\Http\Controllers\AdminController::class, 'dishesIndex'])->name('dishes.index')->middleware('auth');;
Route::get('/dishe/add', [App\Http\Controllers\AdminController::class, 'addDishes'])->name('dishes.add')->middleware('auth');;

// Customers
Route::get('/customers', [App\Http\Controllers\AdminController::class, 'customersIndex'])->name('customer.index')->middleware('auth');;

// Tables
Route::get('/tables', [App\Http\Controllers\AdminController::class, 'tablesIndex'])->name('table.index')->middleware('auth');;
Route::get('/table/add', [App\Http\Controllers\AdminController::class, 'addTable'])->name('table.add')->middleware('auth');;