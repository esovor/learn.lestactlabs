<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');


Route::get('/about', function () {
    return view('home.about');
})->name('about');

Route::get('/resource', function () {
    return view('home.resources');
})->name('resource');

Route::get('/learn', function () {
    return view('home.learn');
})->name('learn');

Route::get('/tutorials', function () {
    return view('home.tutorials');
})->name('tutorials');
