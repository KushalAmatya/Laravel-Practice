<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\todolistcontroller;

//use kebab casing
Route::get('/', [todolistcontroller::class,'index']);

Route::post('/save-todo', [todolistcontroller::class,'saveTodo'])->name('saveTodo');

Route::get('/delete/{id}', [todolistcontroller::class,'delTodo']);

Route::get('/edit/{id}', [todolistcontroller::class,'editTodo']);

Route::post('/edit', [todolistcontroller::class,'updateTodo'])->name('updateTodo');


