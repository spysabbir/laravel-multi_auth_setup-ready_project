<?php

use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\Admin\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::patch('/profile/update', [ProfileController::class, 'profileUpdate'])->name('profile.update');
    Route::put('password/update', [ProfileController::class, 'passwordUpdate'])->name('password.update');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/default-setting', [SettingController::class, 'defaultSetting'])->name('default.setting');
    Route::post('/default/setting/update/{id}', [SettingController::class, 'defaultSettingUpdate'])->name('default.setting.update');

    Route::get('/mail-setting', [SettingController::class, 'mailSetting'])->name('mail.setting');
    Route::post('/mail/setting/update/{id}', [SettingController::class, 'mailSettingUpdate'])->name('mail.setting.update');
});
