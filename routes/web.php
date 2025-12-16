<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;


Route::get('test-queue', function(){

   $job = Job::first();

   TranslateJob::dispatch($job);

   return 'Done';

});


Route::get('test-mail', [MailController::class, 'index']);

Route::view('/', 'home' );
Route::view('/about','about');
Route::view('/contact', 'contact');

 Route::get('/jobs', [JobController::class, 'index']);
 Route::get('/jobs/create', [JobController::class, 'create']);
 Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
 Route::get('/jobs/{job}', [JobController::class, 'show']);

 Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

 Route::patch('/jobs/{job}', [JobController::class, 'update']);
 Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

// Login
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


