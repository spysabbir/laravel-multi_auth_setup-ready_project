<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
