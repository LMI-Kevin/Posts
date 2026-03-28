<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login.user');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register.user');

Route::middleware('auth')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    
    Route::get('/add-post', [PostController::class, 'addPost'])->name('add.post');
    Route::post('/store-post', [PostController::class, 'storePost'])->name('store.post');

    Route::get('/view-post/{id}', [PostController::class, 'viewPost'])->name('view.post');

    Route::get('/my-posts', [PostController::class, 'viewUserPosts'])->name('user.posts');

    Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('edit.post');
    Route::put('/update-post/{id}', [PostController::class, 'updatePost'])->name('update.post');
    Route::delete('/delete-post/{id}', [PostController::class, 'deletePost'])->name('delete.post');
});
