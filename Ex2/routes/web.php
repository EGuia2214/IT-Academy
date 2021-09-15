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

Route::get('/login', LoginController::class); 

Route::get('/logout', LogoutController::class);


Route::get('/catalog', [CatalogController::class, 'index']);

Route::get('/catalog/show/{id}', [CatalogController::class, 'show']);

Route::get('/catalog/create', [CatalogController::class, 'create']);

Route::get('/catalog/edit/{id}', [CatalogController::class, 'edit']);

