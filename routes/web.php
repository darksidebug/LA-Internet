<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlansController;

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

<<<<<<< HEAD
Route::get('/admin/login', function(){
    return view('pages.admin.login');
})->name('login');

Route::get('/customer/login', function(){
    return view('pages.customer.login');
})->name('login');

Route::get('/admin/new/customer', function(){
    return view('pages.admin.new-customer', ['page' => 'ADD NEW CUSTOMER']);
})->name('new-customer');
=======
Route::get('/admin/new/customer', [CustomersController::class,'register'])->name('new-customer');

Route::post('/admin/new/customer/store',[CustomersController::class,'store'])->name('new-customer.store');

>>>>>>> 762c88150a99290c43796ff3828d93af8ea0b684

Route::get('/admin/customer/payment', function(){
    return view('pages.admin.payment', ['page' => 'CUSTOMER PAYMENT']);
})->name('payments');

Route::get('/admin/customer/lists', function(){
    return view('pages.admin.customer-lists', ['page' => 'TABLE OF CUSTOMERS']);
})->name('customer-lists');

Route::get('/customer/dashboard', function(){
    return view('pages.customer.dashboard', ['page' => 'DASHBOARD']);
})->name('customer-dashboard');

Route::get('/customer/payment/history', function(){
    return view('pages.customer.payment-history', ['page' => 'PAYMENT HISTORY']);
})->name('customer-payment-history');

Route::get('/plans', [PlansController::class, 'getPlans']);

