<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\guest;
use App\Http\Middleware\login;

Route::post('/registUser', [AuthController::class, 'store']);
Route::get('/register', [AuthController::class, 'showRegister']);

Route::get('/', [AuthController::class, 'showLogin'])->name('login')->middleware(guest::class);
Route::post('/loginUser', [AuthController::class, 'authentication']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::resource('article', ArticleController::class)->middleware(login::class);