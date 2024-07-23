<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/blog-add', function () {
    return view('blogAdd');
});

Route::get('/my-story', function () {
    return view('myStory');
});

Route::get('/dashboard-admin', function () {
    return view('dashboardAdmin');
});
