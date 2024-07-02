<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

// Categories
Route::get('/categories/all', [CategoryController::class, 'all']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories/store', [CategoryController::class, 'store']);

// Posts
Route::get('/', [PostController::class, 'all']);
Route::get('/posts/all', [PostController::class, 'all']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/store', [PostController::class, 'store']);
