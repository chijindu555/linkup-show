<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Auth::routes();

// Login page
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Register page
//Route::get('/register', function () {
//    return view('auth.register');
//})->name('register');

// Show the registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Handle the form submission
Route::post('/register', [RegisterController::class, 'register'])->name('form_register');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'showUsers'])->name('users');
    Route::post('/admin/{user}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('user.destroy');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
//Route::get('/signup', [App\Http\Controllers\HomeController::class, 'signup'])->name('signup');


