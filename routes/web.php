<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home.path');

Route::get('/restaurants', function () {
    return view('pages.restaurant');
})->name('restaurants.path');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart.path');


Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout.path');


Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact.path');

Route::get('/about', function () {
    return view('pages.about');
})->name('about.path');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
