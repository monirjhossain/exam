<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;

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
    return view('/welcome');
});
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  

/*------------------------------------------
--------------------------------------------
Category Routes List
--------------------------------------------
--------------------------------------------*/
Route::resource('categories', CategoryController::class);

/*------------------------------------------
--------------------------------------------
Product Routes List
--------------------------------------------
--------------------------------------------*/
Route::resource('products', ProductsController::class);
