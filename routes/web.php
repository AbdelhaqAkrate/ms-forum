<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
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


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


Route::controller('posts', PostController::class)->middleware('auth')->group(function () {
    Route::get('posts', [PostController::class, 'index'])->name('posts');
    Route::get('posts/{post}', [PostController::class, 'postDetails'])->name('postDetails');
    Route::post('save', [PostController::class, 'store']);
    Route::post('posts/new-comment', [CommentController::class, 'store']);
    Route::delete('posts/delete-comment/{id}', [CommentController::class, 'delete']);

});

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
