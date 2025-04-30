<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;


Route::prefix('student')->name('student.')->group(function () {
    Route::get('/', [StudentsController::class, 'index'])->name('index');

    Route::get('/marks', [StudentsController::class, 'marks'])->name('marks');

    Route::get('/grades', [StudentsController::class, 'grades'])->name('grades');
});
