<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\FoodItemController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;


//register
Route::get('/admin/register___', [AdminLoginController::class, 'showRegisterForm'])->name('admin.registerForm');
Route::post('/admin/register', [AdminLoginController::class, 'registration'])->name('admin.register');
// login
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
//logout
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');



Route::middleware(['AdminAuth'])->group(function () {
   

 // Routes for authenticated Admin users
 Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

 /////////////

  Route::get('/admin/addPackage', [AdminController::class, 'addPackageForm'])->name('admin.addPackageForm');
  Route::get('/admin/addTodaysMeal', [AdminController::class, 'addTodaysMeal'])->name('admin.addTodaysMeal');
  Route::get('/admin/allExpenses', [AdminController::class, 'allExpenses'])->name('admin.allExpenses');


  Route::get('/admin/orderMeal', [AdminController::class, 'orderMeal'])->name('admin.orderMeal');
  Route::get('/admin/individualExpense', [AdminController::class, 'individualExpense'])->name('admin.individualExpense');
  
  Route::get('/admin/todaysOrders', [AdminController::class, 'todaysOrders'])->name('admin.todaysOrders');
  Route::get('/admin/orderList', [AdminController::class, 'orderList'])->name('admin.orderList');
  
  
  Route::get('/admin/invoice', [InvoiceController::class, 'Create'])->name('admin.invoiceCreate');

 
  Route::resource('admin/foodItems', FoodItemController::class);

});