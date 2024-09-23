<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', function(){
    return "Aquí se mostrará el formulario para crear";
});

Route::get('/posts/{post}', function ($post){
    return "Aquí se mostrará el post {$post}";
});