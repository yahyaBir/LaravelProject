<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


Route::get('/', [LoginController::class,'loginView'])->name('login');
Route::post('/', [LoginController::class,'login'])->name('login-post');
Route::get('/cikis', [LoginController::class,'logout'])->name('logout');
Route::get('/main-menu', [MenuController::class,'mainView'])->middleware('user_auth')->name('main-view');

Route::group(['prefix' => '/user','middleware' => 'user_auth'],function () {
    Route::get('/add-view', [UserController::class, 'addUserView']);
    Route::post('/add-post', [UserController::class, 'addUser'])->name('user-add');
    Route::get('/list', [UserController::class, 'getUserList'])->name('user-list');
    Route::post('/delete-select', [UserController::class, 'deleteSLC'])->name('user-delete-select');
    Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('user-delete');
    Route::get('/delete-get/{id}', [UserController::class, 'deleteUserGet'])->name('user-delete-get');
    Route::get('/edit/{id}', [UserController::class, 'editUser'])->name('user-edit');
    Route::post('/edit-post/{id}', [UserController::class, 'editUserPost'])->name('user-edit-post');
});
Route::group(['prefix' => '/category', 'middleware' => 'user_auth'],function () {
    Route::get('/add-view', [CategoryController::class,'addCategoryView']);
    Route::post('/added-post', [CategoryController::class,'addCategoryTitle'])->name('category-added');
    Route::get('/list', [CategoryController::class,'getCategoryList'])->name('category-list');
    Route::get('/delete/{id}', [CategoryController::class,'deleteCategory'])->name('category-delete');
    Route::get('/delete-get{id}', [CategoryController::class,'deleteCategoryGet'])->name('category-delete-get');
    Route::get('/edit/{id}', [CategoryController::class,'editCategory'])->name('category-edit');
    Route::post('/edit-post/{id}', [CategoryController::class,'editCategoryPost'])->name('category-edit-post');
});
Route::group(['prefix' => '/product', 'middleware' => 'user_auth'],function () {
    Route::get('/add', [ProductController::class,'addProductView']);
    Route::post('/add-post', [ProductController::class,'addProduct'])->name('product-add');
    Route::get('/list', [ProductController::class,'listProduct'])->name('product-list');
    Route::get('/delete/{id}', [ProductController::class,'deleteProduct'])->name('product-delete');
    Route::get('/delete-get/{id}', [ProductController::class, 'deleteProductGet'])->name('product-delete-get');
    Route::get('/edit/{id}', [ProductController::class,'editProduct'])->name('product-edit');
    Route::post('/edit-post/{id}', [ProductController::class,'editProductPost'])->name('product-edit-post');
});
