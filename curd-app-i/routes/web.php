<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutdoorController;

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

Route::get('/', [OutdoorController::class,'index']);

Route::post('/savedata', [Outdoorcontroller::class,'savedata'])->name('savedata');

Route::get('/delete/{id}', [Outdoorcontroller::class,'deldata']);

Route::get('/edit/{id}', [Outdoorcontroller::class,'edit']);

Route::post('/edit', [Outdoorcontroller::class,'updatedata'])->name('updatedata');