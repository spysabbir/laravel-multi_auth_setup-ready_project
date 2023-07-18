<?php

use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');

Route::get('register', [UserController::class, 'register'])->name('register');

Route::get('login', [UserController::class, 'login'])->name('login');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
