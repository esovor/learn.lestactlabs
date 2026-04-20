<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearnController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/resource', [HomeController::class, 'resources'])->name('resource');
Route::get('/tutorials', [HomeController::class, 'tutorials'])->name('tutorials');


Route::get('/learn', [LearnController::class, 'index'])->name('learn.index');
Route::get('/learn/{level}', [LearnController::class, 'showClasses'])->name('learn.classes');
Route::get('/learn/{level}/{class}', [LearnController::class, 'showSubjects'])->name('learn.subjects');














