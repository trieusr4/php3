<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostsController;
use Illuminate\Routing\RouteGroup;
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
Route::controller(PostsController::class)->group(function () {
    Route::get('/posts','index');
    Route::get('/adminPosts','admin');
});
Route::controller(NewsController::class)->group(function () {
    Route::get('/news','index');
});
