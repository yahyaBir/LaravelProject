<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class,'loginMenu']);
Route::post('/login/output', [LoginController::class,'sonuc'])->name('');



