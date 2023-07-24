<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;



Route::get('/login-menu', [LoginController::class,'loginView']);
Route::post('/login-menu/output', [LoginController::class,'login'])->name('output');
//Route::post('/login-menu/errors', [LoginController::class,'loginValidation']);


Route::get('/main-menu', [MenuController::class,'mainView']);


Route::get('/add-user', [UserController::class,'addUserView']);
Route::get('/delete-user', [UserController::class,'deleteUserView']);
Route::get('/edit-user', [UserController::class,'editUserView']);
Route::get('/list-user', [UserController::class,'listUserView']);
Route::post('/user-added', [UserController::class,'addUser'])->name('addUser');
Route::post('/user-deleted', [UserController::class,'deleteSLC'])->name('userDeleted');

Route::post('/user-delete', [UserController::class,'deleteUser'])->name('deleteUser');

Route::post('/user-editedd', [UserController::class,'userEdit'])->name('updateUser');

Route::get('/list-user', [UserController::class, 'getUserList'])->name('listUser');

Route::get('/edit-user/{user}', [UserController::class, 'valueToForm'])->name('editUser');

Route::get('/user-edit/{id}', [UserController::class,'editUser'])->name('user-edit');
Route::post('/user-edit-post/{id}', [UserController::class,'editUserPost'])->name('user-edit-post');

Route::get('/add-category', [CategoryController::class,'addCategoryView']);
Route::get('/delete-category', [CategoryController::class,'deleteCategoryView']);
Route::get('/edit-category', [CategoryController::class,'editCategoryView']);
Route::get('/list-category', [CategoryController::class,'listCategoryView']);
Route::get('/list-category', [CategoryController::class,'getCategoryList'])->name('getCategory');
Route::post('/title-category', [CategoryController::class,'addCategoryTitle'])->name('addCategory');


Route::get('/add-product', [ProductController::class,'addProductView']);
Route::get('/delete-product', [ProductController::class,'deleteProductView']);
Route::get('/list-product', [ProductController::class,'listProductView']);

