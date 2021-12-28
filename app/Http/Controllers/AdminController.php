<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('admin/index');
    }
    // Restaurant
    public function restaurantIndex()
    {
        return view('admin/restaurant/index');
    }
    public function addRestaurant()
    {
        return view('admin/restaurant/add');
    }

    // Order
    public function ordersIndex()
    {
        return view('admin/orders/index');
    }

    // Dishes
    public function dishesIndex()
    {
        return view('admin/dishes/index');
    }
    public function addDishes()
    {
        return view('admin/dishes/add');
    }

    // Customers
    public function customersIndex()
    {
        return view('admin/customer/index');
    }

    // Tables
    public function tablesIndex()
    {
        return view('admin/table/index');
    }
    public function addTable()
    {
        return view('admin/table/add');
    }
    
}

