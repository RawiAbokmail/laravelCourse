<?php

use Illuminate\Support\Facades\Route;

// Route::type('url', 'action');  types are : get , post , put , delete, patch

Route::get('/', function () {
    $name = "Rawi";
    return "welcome $name to my website";
});

Route::get('/about', function () {
    return "about us";
});
Route::get('/contact', function () {
    return "contact us";
});