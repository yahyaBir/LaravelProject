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
Route::get('/list-user', [UserController::class, 'getUserList'])->name('listUser');
Route::get('/edit-user/{user}', [UserController::class, 'valueToForm'])->name('editUser');


Route::get('/user-edit/{id}', [UserController::class,'editUser'])->name('user-edit');
Route::post('/user-edit-post/{id}', [UserController::class,'editUserPost'])->name('user-edit-post');


Route::get('/user-delete/{id}', [UserController::class,'deleteUser'])->name('user-delete');
Route::get('/-user-delete-get/{id}', [UserController::class, 'deleteUserGet'])->name('user-delete-get');













Route::get('/add-category', [CategoryController::class,'addCategoryView']);
Route::get('/delete-category', [CategoryController::class,'deleteCategoryView']);
Route::get('/edit-category', [CategoryController::class,'editCategoryView']);
Route::get('/list-category', [CategoryController::class,'listCategoryView']);

Route::get('/list-category-menu', [CategoryController::class,'getCategoryList'])->name('getCategory');
Route::post('/title-category', [CategoryController::class,'addCategoryTitle'])->name('addCategory');

Route::get('/category-edit/{id}', [CategoryController::class,'editCategory'])->name('category-edit');
Route::post('/category-edit-post/{id}', [CategoryController::class,'editCategoryPost'])->name('category-edit-post');

Route::get('/category-delete/{id}', [CategoryController::class,'deleteCategory'])->name('category-delete');
Route::get('/category-delete-get{id}', [CategoryController::class,'deleteCategoryGet'])->name('category-delete-get');





Route::get('/add-product', [ProductController::class,'addProductView']);
Route::get('/delete-product', [ProductController::class,'deleteProductView']);
Route::get('/list-product', [ProductController::class,'listProductView']);
Route::post('/product-add', [ProductController::class,'addProduct'])->name('category-add');

