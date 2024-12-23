<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Restaurant pages
Route::get('/management', function (){
    return view('management.index');
});

Route::resource('/management/category','\App\Http\Controllers\Management\CategoryController');
Route::resource('/management/menu','\App\Http\Controllers\Management\MenuController');
Route::resource('/management/table','\App\Http\Controllers\Management\TableController');

Route::get('/cashier', '\App\Http\Controllers\Cashier\CashierController@index');
Route::get('/cashier/getMenuByCategory/{category_id}', '\App\Http\Controllers\Cashier\CashierController@getMenuByCategory');
Route::get('/cashier/getTable', '\App\Http\Controllers\Cashier\CashierController@getTables');
Route::get('/cashier/getSaleDetailsByTable/{table_id}', '\App\Http\Controllers\Cashier\CashierController@getSaleDetailsByTable');

Route::post('/cashier/orderFood', '\App\Http\Controllers\Cashier\CashierController@orderFood');
Route::post('/cashier/deleteSaleDetail', '\App\Http\Controllers\Cashier\CashierController@deleteSaleDetail');

Route::post('/cashier/confirmOrderStatus', '\App\Http\Controllers\Cashier\CashierController@confirmOrderStatus');
Route::post('/cashier/savePayment', '\App\Http\Controllers\Cashier\CashierController@savePayment');
Route::get('/cashier/showReceipt/{saleID}', '\App\Http\Controllers\Cashier\CashierController@showReceipt');
