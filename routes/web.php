<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;

// Jobs Routes
Route::get('/', [JobsController::class, 'index']);
Route::get('/jobs', function () {
    return redirect('/');
});
Route::get('/search', SearchController::class);

Route::get('/jobs/create', [JobsController::class, 'create'])
    ->middleware('auth');
Route::post('/jobs', [JobsController::class, 'store'])
    ->middleware('auth');

// Tags Routes
Route::get('/tags/{tag}', TagsController::class);

// Auth Routes
Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
