<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Baihaqi']);
    });
    
Route::get('/greeting', [WelcomeController::class, 'greeting']);


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return 'Hello World';
//    });
   
Route::get('/world', function () { 
    return 'World';
});
   
Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::get('/user/{name}', function ($name) { 
    return 'Nama Saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });


Route::get('/user/{name?}', function ($name='john') {
    return 'Nama saya '.$name;
    });

Route::get('/user/profile', function() {
    //
})->name('profile');

Route::get('/hello', [WelcomeController::class,'hello']);