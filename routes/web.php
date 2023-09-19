<?php

use App\Http\Controllers\accueilController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PraticienController;
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

Route::get('/', [accueilController::class,'accueil']);
Route::get('admin',[adminController::class,'index'])->name('admin.index');
Route::get('logout',[adminController::class,'logout'])->name('admin.logout');
Route::get('login',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'autenticate'])->name('login');

Route::get('category',[CategoryController::class,'index'])->name('categorie.index');
Route::get('ajoutCategory',[CategoryController::class,'create'])->name('category.create');
Route::get('post',[PostController::class,'index'])->name('post.index');
Route::get('praticien',[PraticienController::class,'index'])->name('praticien.index');
Route::post('storeCategory',[CategoryController::class,'store'])->name('categorie.store');
Route::post('store',[PostController::class,'store'])->name('post.store');
Route::get('ajout',[PostController::class,'create'])->name('post.create');
 
Route::get('supprimer/{idcat}',[CategoryController::class,'supprimer']);
Route::get('editer/{idcat}',[CategoryController::class,'editer']);