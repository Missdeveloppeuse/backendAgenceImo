<?php

use App\Http\Controllers\AdminWebAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AdminWebAuthController::class, 'login'])
    ->name('login.post');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AdminWebAuthController::class, 'register'])
    ->name('register.post');


Route::post('/logout', [AdminWebAuthController::class, 'logout'])
    ->name('logout');
  
Route::get('/home', function () {
    return view('page.home');
})->name('home');