<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::type('url', 'action');  types are : get , post , put , delete, patch

// Route::get('/', function () {
//    $url = route('user', ['username' => 'ahmed', 'age' => 25]);
//     return "<a href ='$url'>Go Home Page</a>";
// })->name('home');

// Route::get('/about', function () {
//     return "about us";
// })->name('about');
// Route::get('/contact', function () {
//     return "contact us";
// });
// Route::get('/user/{username}/{age?}', function ($username, $age = null) {
// if ($age) {
//     return "hello $username your age is $age";
// }
// return "hello $username";
// })-> where('username', '[a-zA-Z]+')->where('age', '[0-9]+')->name('user');
// Route::get('/post/{id}', function ($id) {
//     return "post id is $id";
// })->whereNumber('id')-> name('post.show');


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/blog', action: [HomeController::class, 'blog'])->name('blog');
Route::get('/courses/{name?}', [HomeController::class, 'courses'])->name('courses')->whereAlphaNumeric('name');
