<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/user/{user_id}', function($user_id) {
   return view('user', [
    'user' => $user_id
   ]);
});
