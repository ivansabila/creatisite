<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/register', [AccountController::class, 'index']);
Route::post('/register', [AccountController::class, 'store']);

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