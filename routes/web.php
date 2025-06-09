<?php

use Illuminate\Support\Facades\Route;

// landing page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// template navbar
Route::get('/page', function() {
    return view('templates.page');
})->name('page');

// about page
Route::get('/about', function() {
    return view('company.about');
})->name('about');

// collections page
Route::get('/koleksi', function () {
    return view('company.koleksi');
})->name('koleksi');
