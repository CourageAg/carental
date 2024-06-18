<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [CarController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/contact', [ContactController::class, 'POST']); // This should be POST
Route::get('/car/{id}', [CarController::class, 'show']);
Route::post('/book', [CarController::class, 'book']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
