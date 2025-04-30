<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherController;

//   another way 
Route::prefix('teacher')->name('teacher.')->controller(TeacherController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/marks', 'marks')->name('marks');
    Route::get('/avg', 'avg')->name('avg');
});
