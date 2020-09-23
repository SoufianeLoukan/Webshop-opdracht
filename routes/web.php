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
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/', function () {
    $games = Product::all();
    return view('welcome')->with(compact('games'));
})->name('home');

Route::get('/games/{product}', [ProductController::class, 'show'])->name('product.show');


Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/game/create', [ProductController::class, 'create'])->name('product.create');

    Route::post('/dashboard/game/store', [ProductController::class, 'store'])->name('product.store');

    Route::get('/dashboard/game/{product}', [ProductController::class, 'edit'])->name('product.edit');

    Route::patch('/dashboard/game/{product}/update', [ProductController::class, 'update'])->name('product.update');
});
