<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caterer;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Admin Dashboard
    public function dashboard()
    {
        $user = Auth::guard('admin')->user();
        // View::share('user', $user);
        session()->put('adminUser', $user);
        return view('backend.admin.dashboard');
    }

    
    //admin

    public function invoice()
    {
        return view('backend.admin.invoice.invoice');
    }

    public function addPackageForm()
    {

        return view('backend.admin.meal.addPackage');
    }


    public function addTodaysMeal()
    {

        return view('backend.admin.meal.addTodaysMeal');
    }
    public function allExpenses()
    {

        return view('backend.admin.meal.allExpenses');
    }
    //employee
    public function orderMeal()
    {

        return view('backend.admin.meal.orderMeal');
    }

    public function individualExpense()
    {

        return view('backend.admin.meal.individualExpense');
    }

    //vendor
    public function todaysOrders()
    {
        return view('backend.admin.meal.todaysOrders');
    }

    public function orderList()
    {
        return view('backend.admin.meal.totalOrderList');
    }
}
