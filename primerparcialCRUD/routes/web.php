<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\studentsController;
use App\http\Controllers\teachersController;
use App\http\Controllers\usersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('/students', studentsController::class);
Route::resource('/teachers', teachersController::class);
Route::resource('/users', usersController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
