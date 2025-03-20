<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\RoomController::class, 'index'])->name('home');
Route::get('/rooms/{room}', [App\Http\Controllers\RoomController::class, 'show'])->name('rooms.show');
Route::post('/bookings', [App\Http\Controllers\BookingController::class, 'store'])->middleware('auth');
Route::get('/my-bookings', [App\Http\Controllers\BookingController::class, 'index'])->middleware('auth')->name('bookings.index');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);