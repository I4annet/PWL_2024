<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/hello', function () {
//     return 'Hello World';                
// });


// Route::get('/world', function () {
//     return 'World';     
// });

// Route::get('/pesan', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return 'Nim : 2341720126 <br> Nama : Ivansyah Eka Oktaviadi Santoso';
// });

// Route::get('/user/{ivansyah}', function ($name) {
//     return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'. $postId . ' Komentar ke-'. $commentId;
// });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya '.$name;
// });

Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya '.$name;
});





