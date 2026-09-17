<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'index'])->name('home');
Route::get('/form', [AuthController::class, 'form'])->name('form');
Route::match(['get', 'post'], '/welcome', [AuthController::class, 'welcome'])->name('welcome');
Route::get('/data', [AuthController::class, 'data'])->name('data');
