<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

//LoginController rotaları
Route::get('/login', [LoginController::class,'loginView']);
Route::post('/login/output', [LoginController::class,'login'])->name('output');


Route::get('/add', [LoginController::class,'add']);
