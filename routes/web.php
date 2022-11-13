<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// By Default Routes
Route::get('/', function () {
    // Product List view with pagination
    $products = Product::paginate(9);
    // Display view and pass the product for display
    return view('welcome', compact('products'));
});

//Starter Router for laravel Login 
Auth::routes();

//Home Login for guest vistors 
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Product view if user will success to login his/her account 
Route::get('/products', [ProductController::class, 'index'])->name('products.create');
// Users list 
Route::get('/UsersList', [ProductController::class, 'UsersList'])->name('users.list');
// Users Name 
Route::get('/UsersName', [ProductController::class, 'UsersName']);
// Post
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
