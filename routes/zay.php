<?php

use App\Http\Controllers\ZayController;
use Illuminate\Support\Facades\Route;

Route::prefix('zay')->name('zay.')->group(function () {
    Route::get('/', [ZayController::class, 'index'])->name('index');
    Route::get('/about', [ZayController::class, 'about'])->name('about');
    Route::get('/contact', [ZayController::class, 'contact'])->name('contact');
    Route::post('/contact', [ZayController::class, 'contact_data']);
    Route::get('/shop', [ZayController::class, 'shop'])->name('shop');
    Route::get('/shop-single', [ZayController::class, 'shopSingle'])->name('shop-single');
});
