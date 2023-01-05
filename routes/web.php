<?php

use App\Http\Controllers\Web;
use App\Http\Controllers\Web\Auth;
use App\Http\Controllers\Web\Master;
use Illuminate\Support\Facades\Route;

Route::get('', Web\HomeController::class)->name('login');

Route::get('register', [Web\AuthController::class, 'register'])->name('register');
Route::post('sign-up', [Web\AuthController::class, 'sign_up'])->name('submit.sign-up');
Route::post('login', [Web\AuthController::class, 'login'])->name('submit.login');
Route::resource('users', Master\UsersController::class);

Route::middleware('auth')->group(function () {
    Route::get('profile', Auth\ProfileController::class)->name('user.profile');
});
