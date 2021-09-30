<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\HomeController;

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

//Route::get('/logout', LogoutController::class);//no se pide nada en Ex3


Route::get('/empleados', [EmpleadosController::class, 'index'])->name('.index');

Route::get('/empleados/show/{id}', [EmpleadosController::class, 'show'])->name('empleados.show');


Route::get('/empleados/edit/{id}', [EmpleadosController::class, 'edit'])->name('empleados.edit');

Route::put('/empleados/{id}', [EmpleadosController::class, 'update'])->name('empleados.update');


Route::get('/empleados/create', [EmpleadosController::class, 'create'])->name('empleados.create');

Route::post('/empleados/store', [EmpleadosController::class, 'store'])->name('empleados.store');

Route::delete('empleados/destroy/{id}', [EmpleadosController::class, 'destroy'])->name('empleados.destroy');


