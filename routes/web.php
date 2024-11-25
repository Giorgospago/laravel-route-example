<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'home']);
Route::get('/about', [AppController::class, 'about']);
Route::get('/contact', [AppController::class, 'contact']);
Route::get('/users', [AppController::class, 'listOfUsers']);
Route::get('/user/{user_id}', [AppController::class, 'showUser']);
