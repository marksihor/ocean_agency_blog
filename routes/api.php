<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\AccessTokenController;


Route::post('registration', [AuthController::class, 'registration'])->name('registration');
Route::post('login', [AccessTokenController::class, 'issueToken'])
    ->name('login');
