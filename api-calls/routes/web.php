<?php

use Illuminate\Support\Facades\Route;
use App\Models\TvMazeAPI;
use App\Models\Episode;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Auth;

// Authentication Routes
Auth::routes();

// Home Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Welcome Page Route
Route::get('/', function () {
    return view('welcome');
});

// Load Episodes 
Route::get('/load-episodes', function () {
    $showNumber = request('showNumber', 1);
    $episodes = TvMazeAPI::fetch($showNumber);
    return view('episodes.index', ['episodes' => $episodes]);
});

// View Episodes 
Route::get('/view-episodes', function (Illuminate\Http\Request $request) {
    $showNumber = $request->query('showNumber', 1);
    $episodes = Episode::where('show_number', $showNumber)->get();
    return view('episodes.index')->with('episodes', $episodes);
});

// Public Product Routes
Route::resource('products', ProductController::class)->only(['index', 'show']);

// Admin Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes for Products
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
});


// Route::get('/products', 'ProductController@index')->name('products.index');
// Route::get('/products/{product}', 'ProductController@show')->name('products.show');

// Route::middleware('auth')->group(function () {
//     Route::get('/products', [ProductController::class . 'edit'])->name('products.edit');
//     Route::patch('/products', [ProductController::class . 'update'])->name('products.update');
//     Route::delete('/products', [ProductController::class . 'destroy'])->name('products.destroy');
// });
