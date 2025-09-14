<?php

use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\JobController::class, 'index'])->name('home');

Route::get('/jobs/create', [App\Http\Controllers\JobController::class, 'create'])->name('jobs.create')->middleware('auth');
Route::post('/jobs', [App\Http\Controllers\JobController::class, 'store'])->name('jobs.store')->middleware('auth');

Route::get('/search', SearchController::class)->name('search');
Route::get('/tags/{tag:name}', TagController::class);

Route::middleware('guest')->group(function(){

Route::get('/register',[RegisterUserController::class, 'create'])->name('register');
Route::post('/register',[RegisterUserController::class, 'store']);
Route::get('login',[SessionController::class, 'create'])->name('login');
Route::post('login',[SessionController::class, 'store']);
});

Route::delete('logout',[SessionController::class, 'destroy'])->name('logout')->middleware('auth');


