<?php

use Illuminate\Support\Facades\Route;

//user routes

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('destination', function () {
    return view('destination');
});
Route::get('tour', function () {
    return view('tour');
});

//admin routes
Route::get('admin/admin-dashboard', function () {
    return view('admin/admin-dashboard');
});
Route::get('admin/admin-dashboard', function () {
    return view('admin/admin-dashboard');
});

