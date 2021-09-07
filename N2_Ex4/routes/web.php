<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContentController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('About', [AboutController::class, 'index'])->name('about');
Route::get('News', [NewsController::class, 'index'])->name('news');
Route::get('Content', [ContentController::class, 'index'])->name('content');
Route::get('Contact', [ContactController::class, 'index'])->name('contact');


/*Route::get('/', function () {
    return view('welcome');
});*/
