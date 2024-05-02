<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::post('/reserve', [ReservationController::class, 'store'])->name('reserve.store');
Route::get('/welcome', [WelcomeController::class, 'showWelcome'])->name('welcome');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/reserve', [ReservationController::class, 'create'])->name('reserve.create');
Route::get('/', [WelcomeController::class, 'index'])->name('home');
