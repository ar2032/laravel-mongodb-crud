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

Route::get('/', [App\Http\Controllers\PostController::class, 'home'])->middleware(['auth'])->name('home');
require __DIR__.'/auth.php';
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'createForm'])->middleware(['auth'])->name('post.form');
Route::post('/posts/create', [App\Http\Controllers\PostController::class, 'save'])->middleware(['auth'])->name('post.save');
Route::get('/posts/{id}/edit', [App\Http\Controllers\PostController::class, 'editForm'])->middleware(['auth'])->name('post.edit.form');
Route::post('/posts/delete', [App\Http\Controllers\PostController::class, 'delete'])->middleware(['auth'])->name('post.delete');