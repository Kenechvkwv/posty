<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

//Registration
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


//View Index
Route::get('/posts', function () {
    return view('posts.index');
})->name('post');

//View Home
Route::get('/', function () {
    return view('home');
})->name('home');

//Logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');