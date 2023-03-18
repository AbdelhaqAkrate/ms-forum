<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//secure api routes
Route::controller('posts', PostController::class)->middleware('auth')->group(function () {
    Route::get('posts/{post}', [PostController::class, 'postDetails']);
    Route::post('save', [PostController::class, 'store']);
    Route::post('posts/new-comment', [CommentController::class, 'store']);
    Route::get('posts/delete-comment/{id}', [CommentController::class, 'delete']);
});
