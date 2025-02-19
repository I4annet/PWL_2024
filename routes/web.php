<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;



// Route::get('/hello', function () {
//     return 'Hello World';                PRAKTIKUM 1
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

// Route::get('/user/{ivansyah?}', function ($name) {
//     return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'. $postId . ' Komentar ke-'. $commentId;
// });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya '.$name;
// });

// Route::get('/user/{name?}', function ($name = null) {
//     return 'Nama saya '.$name;
// });

// Route::get('/hello', [Controller::class,'hello']);

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/article/{id}', [PageController::class, 'article']);

