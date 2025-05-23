<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CreativeController;
use App\Http\Controllers\FormsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
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

Route::get('/component', [ComponentController :: class, 'index'])->name('component.index');

Route ::get('/agency', [AgencyController::class, 'index'])->name('agency.index');

Route::get('/form1', [FormsController::class, 'form1'])->name('forms.form1');
Route::post('/form1', [FormsController::class, 'form1_data']);

Route::get('/form2', [FormsController::class, 'form2'])->name('forms.form2');
Route::post('/form2', [FormsController::class, 'form2_data']);

Route::get('/form3', [FormsController::class, 'form3'])->name('forms.form3');
Route::post('/form3', [FormsController::class, 'form3_data']);

Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');