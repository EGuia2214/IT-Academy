<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CatalogController;

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

Route::get('/', HomeController::class);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/welcome', [LoginController::class, 'access'])->name('login.access');//NO LA USO

Route::get('/logout', LogoutController::class);//no se pide nada en Ex3


Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');

Route::get('/catalog/show/{id}', [CatalogController::class, 'show'])->name('catalog.show');

Route::post('/catalog/modified', [CatalogController::class, 'modified'])->name('catalog.modified');

Route::get('/catalog/create', [CatalogController::class, 'create'])->name('catalog.create');

Route::post('/catalog/created', [CatalogController::class, 'created'])->name('catalog.created');

Route::get('/catalog/edit/{id}', [CatalogController::class, 'edit'])->name('catalog.edit');

