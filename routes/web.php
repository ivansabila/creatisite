<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/register', function () {
    return view('register');
});

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