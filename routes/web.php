<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function(){
Route::get('/dashboard','Admin\FrontendController@index');
Route::get('categories','Admin\categoryController@index');
Route::get('add-category','Admin\categoryController@add');
Route::post('insert-category','Admin\categoryController@insert');
Route::get('edit-category/{id}',[categoryController::class,'edit']);
Route::put('update-category/{id}',[categoryController::class,'update']);
Route::get('delete-category/{id}',[categoryController::class,'destroy']);
Route::get('products',[ProductController::class,'index']);
Route::get('add-products',[ProductController::class,'add']);
Route::post('insert-product',[ProductController::class, 'insert']);
Route::get('edit-product/{id}',[ProductController::class,'edit']);
Route::put('update-product/{id}',[ProductController::class, 'update']);
Route::get('delete-product/{id}',[ProductController::class, 'destroy']);
 });
