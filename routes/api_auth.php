<?php

use App\Http\Controllers\Api\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::post('registration', [AuthController::class, 'registration'])->name('registration');
Route::get('test', [AuthController::class, 'test'])->name('registration');
