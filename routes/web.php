<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ProductImportController;

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

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

// Category Routes
// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/products/import', [ProductImportController::class, 'index'])->name('admin.products.import');
    Route::post('/products/import', [ProductImportController::class, 'import'])->name('admin.products.import');
});

// Legacy routes (keeping for backward compatibility)
Route::get('/product/electric-oven-single-deck-two-tray', function () {
    return view('front.electric-oven-singel-deck-two-tray');
})->name('pdp.legacy');
Route::get('/categroy-listing', function () {
    return view('front.categroy-listing');
})->name('category.listing.legacy');
