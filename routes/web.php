<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('Account.register');
})->name('register');

Route::get('/login', function(){
    return view('Account.login');
})->name('login');

