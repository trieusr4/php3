<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::group(['namespace' => 'Categories', 'prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/create', [CategoryController::class, 'create']);
        Route::post('/add', [CategoryController::class, 'store']);
        Route::get('/{id}/edit', [CategoryController::class, 'edit']);
        Route::put('/{id}/update', [CategoryController::class, 'update']);
        Route::delete('/{id}/delete', [CategoryController::class, 'destroy']);
    });
    Route::group(['namespace' => 'Users', 'prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/create', [UserController::class, 'create']);
        Route::post('/add', [UserController::class, 'store']);
        Route::get('/{id}/edit', [UserController::class, 'edit']);
        Route::put('/{id}/update', [UserController::class, 'update']);
        Route::delete('/{id}/delete', [UserController::class, 'destroy']);
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'post'], function () {
        Route::get('/', [PostController::class, 'index']);
        Route::get('/create', [PostController::class, 'create']);
        Route::post('/add', [PostController::class, 'store']);
        Route::get('/{id}/edit', [PostController::class, 'edit']);
        Route::put('/{id}/update', [PostController::class, 'update']);
        Route::delete('/{id}/delete', [PostController::class, 'destroy']);
    });
    Route::group(['namespace' => 'Products', 'prefix' => 'products'], function () {
        Route::get('/', [ProductsController::class, 'index']);
        Route::get('/create', [ProductsController::class, 'create']);
        Route::post('/add', [ProductsController::class, 'store']);
        Route::get('/{id}/edit', [ProductsController::class, 'edit']);
        Route::put('/{id}/update', [ProductsController::class, 'update']);
        Route::delete('/{id}/delete', [ProductsController::class, 'destroy']);
    });
});



require __DIR__ . '/auth.php';