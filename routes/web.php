<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\UserPublicationsController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\WriteNewsController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware("auth")->group(function () {
    Route::get('/publications', [UserPublicationsController::class, 'index'])->name('publications');
    Route::get('/write', [WriteNewsController::class, 'index'])->name('write');
    Route::post('/send-post', [WriteNewsController::class, 'sendNews'])->name('send-post');
    // Route::post('/send-message', [MessagesController::class, 'sendMessage'])->name('send-message');
    Route::get('/logout', [UserLoginController::class, 'logout'])->name('logout');
});

Route::middleware("guest")->group(function () {
    Route::get('/comments/{newsId}', function ($newsId) {});
    Route::get('/login', [UserLoginController::class, 'index'])->name('login');
    Route::get('/registration', [UserRegistrationController::class, 'index'])->name('registration');
    Route::post('/registration-action', [UserRegistrationController::class, 'register'])->name('registration-action');
    Route::post('/login-action', [UserLoginController::class, 'login'])->name('login-action');
});

Route::get('/cloud', [UserCloudController::class, 'index']);