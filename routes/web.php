<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\VacanceController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return redirect('/dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/tables', function () {
    return view('tables');
})->name('tables')->middleware('auth');

// Route::get('/profile', function () {
//     return view('account-pages.profile');
// })->name('profile')->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
});
Route::delete('/users/{id}', [ProfileController::class, 'destroy'])->name('users.destroy')->middleware('auth');

//hethy
/*  Route::get('/signin', function () {
 return view('account-pages.signin');
 })->name('signin'); */
//  // hethy
 Route::get('/signup', function () {
return view('account-pages.signup');
 })->name('signup')->middleware('guest');

Route::get('/signup', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('signup');

Route::post('/signup', [RegisterController::class, 'store'])
    ->middleware('guest')->name('signup.post');


Route::post('/addmember', [RegisterController::class, 'store'])
     ->middleware(['auth', 'IsAdmin'])
     ->name('addmember');
Route::get('/addmember', function () {
    return view('laravel-examples.addmember'); // path: resources/views/laravel-examples/addmember.blade.php
})->middleware(['auth', 'IsAdmin'])->name('addmember.form');



Route::get('/signin', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('signin');

Route::post('/signin', [LoginController::class, 'store'])->middleware('guest')->name('signin.post');


Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest');



Route::middleware(['auth'])->group(function () {
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
});


Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');



Route::delete('/users/{id}', [ProfileController::class, 'destroy'])->name('users.destroy')->middleware('auth');

Route::get('/laravel-examples/user-profile/{id}', [ProfileController::class, 'index'])->name('users.profile')->middleware('auth');
Route::put('/laravel-examples/user-profile/{id}', [ProfileController::class, 'update'])->name('users.update');
Route::get('/laravel-examples/users-management', [UserController::class, 'index'])->name('users-management')->middleware('auth');


Route::middleware(['auth'])->group(function () {
Route::resource('holidays', VacanceController::class);
});
