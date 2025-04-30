<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', function () {
        return "Admin Page";
    })->name('index');

    Route::get('/users', function () {
        return "Admin Users Page";
    })->name('users');

    Route::get('/settings', function () {
        return "Admin Settings Page";
    })->name('settings');
});