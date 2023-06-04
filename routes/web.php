<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/







Route::get('/register', [UserController::class, 'signinpage'])->middleware('guest')->name('signup');
Route::get('/login', [UserController::class, 'loginpage'])->name('login');


Route::post('/register', [UserController::class, 'signup']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/index', [ProductController::class, 'home'])->middleware('auth')->name('index');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/create', [ProductController::class, 'create'])->name('productcreate');
Route::post('/product/add', [ProductController::class, 'store'])->name('productadd');
Route::get('/product/view/{id}', [ProductController::class, 'show'])->name('productview');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('productedit');
Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('productupdate');
Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('productdestroy');

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customercreate');
Route::post('/customer/add', [CustomerController::class, 'store'])->name('customeradd');
Route::get('/customer/view/{id}', [CustomerController::class, 'show'])->name('customerview');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customeredit');
Route::put('/customer/update/{id}', [CustomerController::class, 'update'])->name('customerupdate');
Route::delete('/customer/delete/{id}', [CustomerController::class, 'destroy'])->name('destroy');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('session/get', [SessionController::class, 'accessSessionData']);
Route::get('session/set', [SessionController::class, 'storeSessionData']);
Route::get('session/remove', [SessionController::class, 'deleteSessionData']);


