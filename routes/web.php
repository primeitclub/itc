<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('/login', 'index')->name('login-form');
            Route::post('/login', 'login')->name('login');
        });
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });
});
