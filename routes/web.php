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
