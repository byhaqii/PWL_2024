<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
   });
   
Route::get('/world', function () { 
    return 'World';
});
   
Route::get('/', function () { 
    return 'Selamat Datang';
});

Route::get('/about', function () { 
    return '2341720225 - Muhammad Rizal Al Baihaqi';
});

Route::get('/user/{name}', function ($name) { 
    return 'Nama Saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
    });

Route::get('/user/{name?}', function ($name='john') {
    return 'Nama saya '.$name;
    });

Route::get('/user/profile', function() {
    //
})->name('profile');

