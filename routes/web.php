<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'home'])->name('home');

// Route::controller(Authcontroller::class)->group(function () {
//     Route::get('/login', 'login')->name('login');
//     Route::post('/loginpost', 'loginpost')->name('loginpost');
// });
// Route::middleware(['admin', 'auth'])->group(function () {});
// Route::prefix('admin')->group(function () {});

// Route::middleware('guest')->group(function () {
//     Route::get('/', [Authcontroller::class, 'register'])->name('register');
//     Route::get('/login', [Authcontroller::class, 'login'])->name('login');
//     Route::post('/loginpost', [Authcontroller::class, 'loginpost'])->name('loginpost');
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/home', [Authcontroller::class, 'home'])->name('home');
//     Route::post('/register', [Authcontroller::class, 'registerpost'])->name('registerpost');
//     Route::post('/logout', [Authcontroller::class, 'logout'])->name('logout');
// });
