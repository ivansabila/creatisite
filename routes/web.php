<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AccountController::class, 'index']);
Route::post('/register', [AccountController::class, 'store']);

Route::get('/login', function () {
    return view('login');
});