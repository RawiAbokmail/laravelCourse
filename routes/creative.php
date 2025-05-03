<?php

use App\Http\Controllers\CreativeController;
use Illuminate\Support\Facades\Route;

Route::prefix('creative')->name('creative.')->group(function () {
    Route::get('/', [CreativeController::class, 'index'])->name('index');
    Route::get('/about', [CreativeController::class, 'about'])->name('about');
    Route::get('/services', [CreativeController::class, 'services'])->name('services');
    Route::get('/portfolio', [CreativeController::class, 'portfolio'])->name('portfolio');
    Route::get('/contact', [CreativeController::class, 'contact'])->name('contact');

    });
