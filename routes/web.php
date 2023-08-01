<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;



Route::get('/', [LoginController::class,'loginView'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('login-post');
Route::/*middleware('user_auth')->*/get('/main-menu', [MenuController::class,'mainView'])->name('main-view');


Route::get('/user-add-view', [UserController::class,'addUserView']);
Route::post('/user-add-post', [UserController::class,'addUser'])->name('user-add');
Route::post('/user-delete-select', [UserController::class,'deleteSLC'])->name('user-delete-select');
Route::get('/user-list', [UserController::class, 'getUserList'])->name('user-list');
Route::get('/user-edit/{id}', [UserController::class,'editUser'])->name('user-edit');
Route::post('/user-edit-post/{id}', [UserController::class,'editUserPost'])->name('user-edit-post');
Route::get('/user-delete/{id}', [UserController::class,'deleteUser'])->name('user-delete');
Route::get('/-user-delete-get/{id}', [UserController::class, 'deleteUserGet'])->name('user-delete-get');


Route::get('/category-add-view', [CategoryController::class,'addCategoryView']);
Route::get('/category-list', [CategoryController::class,'getCategoryList'])->name('category-list');
Route::post('/category-added-post', [CategoryController::class,'addCategoryTitle'])->name('category-added');
Route::get('/category-edit/{id}', [CategoryController::class,'editCategory'])->name('category-edit');
Route::post('/category-edit-post/{id}', [CategoryController::class,'editCategoryPost'])->name('category-edit-post');
Route::get('/category-delete/{id}', [CategoryController::class,'deleteCategory'])->name('category-delete');
Route::get('/category-delete-get{id}', [CategoryController::class,'deleteCategoryGet'])->name('category-delete-get');


Route::get('/add-product', [ProductController::class,'addProductView']);
Route::get('/add-product', [ProductController::class,'addProductView']);

Route::post('/product-add', [ProductController::class,'addProduct'])->name('product-add');
Route::get('/list-product-menu', [ProductController::class,'listProduct'])->name('product-list');
Route::get('/product-delete/{id}', [ProductController::class,'deleteProduct'])->name('product-delete');
Route::get('/product-delete-get/{id}', [ProductController::class, 'deleteProductGet'])->name('product-delete-get');

Route::get('/product-edit/{id}', [ProductController::class,'editProduct'])->name('product-edit');
Route::post('/product-edit-post/{id}', [ProductController::class,'editProductPost'])->name('product-edit-post');
