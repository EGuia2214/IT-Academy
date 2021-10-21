<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsListController;
use App\Http\Controllers\ScoresController;

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

Route::get('/dashboard', function () {
    return redirect()->route('list');
})->middleware(['auth'])->name('dashboard');



Route::get('/dashboard/list', [TeamsListController::class, 'index']) ->name('list');//lista equipos y partidos


Route::get('/dashboard/list/show/{id}', [TeamsListController::class, 'show'])->name('list.show');


Route::get('/dashboard/list/edit/{id}', [TeamsListController::class, 'edit'])->name('list.edit');

Route::put('/dashboard/list/{id}', [TeamsListController::class, 'update'])->name('list.update');


Route::get('/dashboard/list/create', [TeamsListController::class, 'create'])->name('list.create');

Route::post('/dashboard/list/store', [TeamsListController::class, 'store'])->name('list.store');


Route::delete('dashboard/list/destroy/{id}', [TeamsListController::class, 'destroy'])->name('list.destroy');


////
Route::get('/scores/show/{id}', [ScoresController::class, 'show'])->name('scores.show');


Route::get('/scores/edit/{id}', [ScoresController::class, 'edit'])->name('scores.edit');

Route::put('/scores/{id}', [ScoresController::class, 'update'])->name('scores.update');


Route::get('/scores/create', [ScoresController::class, 'create'])->name('scores.create');

Route::post('/scores/store', [ScoresController::class, 'store'])->name('scores.store');


Route::delete('scores/destroy/{id}', [ScoresController::class, 'destroy'])->name('scores.destroy');



require __DIR__.'/auth.php';



