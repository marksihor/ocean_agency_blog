<?php

use App\Http\Controllers\Api\Public\AuthController;
use App\Http\Controllers\Api\Public\Post\CommentController;
use App\Http\Controllers\Api\Public\PostController;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\AccessTokenController;


Route::post('registration', [AuthController::class, 'registration'])->name('registration');
Route::post('login', [AccessTokenController::class, 'issueToken'])
    ->name('login');

Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/{post}', [PostController::class, 'show'])->name('show');

    Route::group(['prefix' => '{post}/comments', 'as' => 'comments.'], function () {
        Route::get('/', [CommentController::class, 'index'])->name('index');
        Route::post('/', [CommentController::class, 'store'])->name('store');
    });
});
