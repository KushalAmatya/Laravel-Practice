<?php

use Illuminate\Support\Facades\Route;

use App\Models\Article;
Route::get('/', function () {
    return view('welcome',[
        'header'=>'Galat Khabar',
        'article'=>Article::getAllArticles()
    ]);
});

Route::get('/article/{id}', function ($id) {
    return view('article',[
        'article'=>Article::getsingleartticle($id)
    ]);
});