<?php

use App\Http\Controllers\CreativeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site1Controller;

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


// site1
Route::prefix('site1')->name('site1.')->group(function (){
Route::get('/', [Site1Controller::class, 'index'])->name('index');
Route::get('/about', [Site1Controller::class, 'about'])->name('about');
Route::get('/contact', [Site1Controller::class, 'contact'])->name('contact');
Route::get('/{teacher}/students', [Site1Controller::class, 'students'])->name('students');
Route::post('/contact', [Site1Controller::class, 'contact']);
Route::get('/{name}/{age?}', [Site1Controller::class, 'user'])->name('user')->whereAlphaNumeric('name');
});