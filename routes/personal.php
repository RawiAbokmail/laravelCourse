<?php

use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;


Route::prefix('personal')->name('personal.')->group(function () {
    Route::get('/', [PersonalController::class, 'index'])->name('index');
    Route::get('/projects', [PersonalController::class, 'projects'])->name('projects');
    Route::get('/contact', [PersonalController::class, 'contact'])->name('contact');
    Route::get('/resume', action: [PersonalController::class, 'resume'])->name('resume');
});
