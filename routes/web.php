<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home' );
Route::view('/about','about');
Route::view('/contact', 'contact');

Route::resource('jobs',JobController::class);

// Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

// Login
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


