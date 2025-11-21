<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('/about-us', function () {
    return view('front.aboutus');
})->name('aboutus');

Route::get('/contact-us', function () {
    return view('front.contact');
})->name('contactus');
Route::get('/services', function () {
    return view('front.services');
})->name('services');
Route::get('/blog', function () {
    return view('front.blog');
})->name('blog');
Route::get('/shop', function () {
    return view('front.shop');
})->name('shop');
