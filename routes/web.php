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
});
//category
// Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
// Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
// Route::get('/category', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
// Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
// Route::patch('/category/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
// Route::get('/category/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');
//
// //post
// Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
// Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
// Route::get('/post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
// Route::get('/post/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
// Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
// Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');

////////////////
Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::patch('/category/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');
Route::get('/category/{id}/posts', [App\Http\Controllers\CategoryController::class, 'categoryPosts'])->name('category.posts');

//Post
Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/post', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/post/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::patch('/post/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::delete('/post/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');
