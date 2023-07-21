<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


//LoginController rotalari
Route::get('/login-menu', [LoginController::class,'loginView']);
Route::post('/login-menu/output', [LoginController::class,'login'])->name('output');
//Route::post('/login-menu/errors', [LoginController::class,'loginValidation']);


//MenuController rotalari
Route::get('/main-menu', [MenuController::class,'mainView']);


//UserController rotalari
Route::get('/add-user', [UserController::class,'addUserView']);
Route::get('/delete-user', [UserController::class,'deleteUserView']);
Route::get('/edit-user', [UserController::class,'editUserView']);
Route::get('/list-user', [UserController::class,'listUserView']);

Route::post('/user-added', [UserController::class,'addUser'])->name('userAdded');
Route::post('/user-deleted', [UserController::class,'deleteSLC'])->name('userDeleted');
Route::post('/user-delete', [UserController::class,'userEdit'])->name('bos');

Route::get('/list-user', [UserController::class, 'getUserList'])->name('listUser');
Route::get('/edit-user/{user}', [UserController::class, 'valueToForm'])->name('editUser');












//CategoryController rotalari
Route::get('/add-category', [CategoryController::class,'addCategoryView']);
Route::get('/delete-category', [CategoryController::class,'deleteCategoryView']);
Route::get('/edit-category', [CategoryController::class,'editCategoryView']);
Route::get('/list-category', [CategoryController::class,'listCategoryView']);
Route::post('/title-category', [CategoryController::class,'addCategoryTitle'])->name('addCategory');


//ProductContoller rotalari
Route::get('/add-product', [ProductController::class,'addProductView']);
Route::get('/delete-product', [ProductController::class,'deleteProductView']);
Route::get('/list-product', [ProductController::class,'listProductView']);

