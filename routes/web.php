<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/new', [HomeController::class, 'new']);
Route::group(['namespace' => 'Home', 'prefix' => 'home'], function () {
    Route::get('/product-detail/{id}', [ProductsController::class, 'detailHome']);
    Route::get('/new-detail/{id}', [NewsController::class, 'detailHome']);
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::group(['namespace' => 'Categories', 'prefix' => 'categories', 'middleware' => 'role:admin'], function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/create', [CategoryController::class, 'create']);
        Route::post('/add', [CategoryController::class, 'store']);
        Route::get('/{id}/edit', [CategoryController::class, 'edit']);
        Route::put('/{id}/update', [CategoryController::class, 'update']);
        Route::delete('/{id}/delete', [CategoryController::class, 'destroy']);
    });
    Route::group(['namespace' => 'Users', 'prefix' => 'users', 'middleware' => 'role:admin'], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/create', [UserController::class, 'create']);
        Route::post('/add', [UserController::class, 'store']);
        Route::get('/{id}/edit', [UserController::class, 'edit']);
        Route::put('/{id}/update', [UserController::class, 'update']);
        Route::delete('/{id}/delete', [UserController::class, 'destroy']);
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'post', 'middleware' => 'role:admin'], function () {
        Route::get('/', [PostController::class, 'index']);
        Route::get('/create', [PostController::class, 'create']);
        Route::post('/add', [PostController::class, 'store']);
        Route::get('/{id}/edit', [PostController::class, 'edit']);
        Route::put('/{id}/update', [PostController::class, 'update']);
        Route::delete('/{id}/delete', [PostController::class, 'destroy']);
    });
    Route::group(['namespace' => 'Products', 'prefix' => 'products', 'middleware' => 'role:writer'], function () {
        Route::get('/', [ProductsController::class, 'index']);
        Route::get('/create', [ProductsController::class, 'create']);
        Route::post('/add', [ProductsController::class, 'store']);
        Route::get('/{id}/edit', [ProductsController::class, 'edit']);
        Route::get('/{id}/detail', [ProductsController::class, 'detailHome'])->withoutMiddleware([Role::class]);
        Route::put('/{id}/update', [ProductsController::class, 'update']);
        Route::delete('/{id}/delete', [ProductsController::class, 'destroy']);
    });
    Route::group(['namespace' => 'News', 'prefix' => 'news', 'middleware' => 'role:admin'], function () {
        Route::get('/', [NewsController::class, 'index']);
        Route::get('/create', [NewsController::class, 'create']);
        Route::post('/add', [NewsController::class, 'store']);
        Route::get('/{id}/edit', [NewsController::class, 'edit']);
        Route::put('/{id}/update', [NewsController::class, 'update']);
        Route::delete('/{id}/delete', [NewsController::class, 'destroy']);
        Route::get('/{id}/detail', [NewsController::class, 'detailHome'])->withoutMiddleware([Role::class]);
    });
    Route::group(['namespace' => 'Comments', 'prefix' => 'comments','middleware' => 'role:admin'], function () {
        Route::get('/', [CommentsController::class, 'index']);
        Route::post('/store', [CommentsController::class, 'store']);
        Route::post('/replies', [CommentsController::class, 'replies']);
        Route::delete('/{id}/delete', [CommentsController::class, 'destroy']);
    });
});

require __DIR__ . '/auth.php';