<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function() {
    Route::get('/', [App\Http\Controllers\Web\ThoughtController::class, 'index'])->name('home');
    Route::post('/', [App\Http\Controllers\Web\ThoughtController::class, 'store']);
});

Route::get('/login', [App\Http\Controllers\Web\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Web\Auth\LoginController::class, 'login']);

Route::post('/logout', [App\Http\Controllers\Web\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/password/confirm', [App\Http\Controllers\Web\Auth\ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('/password/confirm', [App\Http\Controllers\Web\Auth\ConfirmPasswordController::class, 'confirm']);

Route::post('/password/email', [App\Http\Controllers\Web\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset', [App\Http\Controllers\Web\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/reset', [App\Http\Controllers\Web\Auth\ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('/password/reset/{token}', [App\Http\Controllers\Web\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');

Route::post('/register', [App\Http\Controllers\Web\Auth\RegisterController::class, 'register']);
Route::get('/register', [App\Http\Controllers\Web\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');