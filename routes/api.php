<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PassportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\ScoresController;
use App\Http\Controllers\PlayersController;





/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {//rutas web (vienen por defecto)
    return $request->user();
});



//// Passport Auth
Route::get('/register', function () {
    return "Formulario de registro";
    
});
Route::post('/register', [PassportController::class, 'register'])->name('register');

Route::get('/login', function () {
    return "Formulario de login";
    
});
Route::post('/login', [PassportController::class, 'login'])->name('login');




//Entrada

Route::middleware('auth:api')->group(function(){//protege todas las rutas ante usuarios no autenticados
Route::get('/dashboard', function () {
    return 'API Dashboard. En la vista parecerían los botones que dirigen a los cruds de equipos, partidos y jugadores';
});

Route::post('/logout', [PassportController::class, 'logout'])->name('logout');


//mail
Route::get('dashboard/contact',[ContactController::class, 'index'])->name('contact.index');

Route::post('dashboard/contact',[ContactController::class, 'store'])->name('contact.store');



///teams


Route::get('/dashboard/teams', [TeamsController::class, 'index']) ->name('teams');//lista equipos y partidos


Route::get('/dashboard/teams/show/{id}', [TeamsController::class, 'show'])->name('teams.show');


Route::get('/dashboard/teams/edit/{id}', [TeamsController::class, 'edit'])->name('teams.edit');

Route::put('/dashboard/teams/{id}', [TeamsController::class, 'update'])->name('teams.update');


Route::get('/dashboard/teams/create', [TeamsController::class, 'create'])->name('teams.create');

Route::post('/dashboard/teams/store', [TeamsController::class, 'store'])->name('teams.store');


Route::delete('dashboard/teams/destroy/{id}', [TeamsController::class, 'destroy'])->name('teams.destroy');


////scores
Route::get('dashboard/scores', [ScoresController::class, 'index']) ->name('scores');

Route::get('dashboard/scores/show/{id}', [ScoresController::class, 'show'])->name('scores.show');


Route::get('dashboard/scores/edit/{id}', [ScoresController::class, 'edit'])->name('scores.edit');

Route::put('dashboard/scores/{id}', [ScoresController::class, 'update'])->name('scores.update');


Route::get('dashboard/scores/create', [ScoresController::class, 'create'])->name('scores.create');

Route::post('dashboard/scores/store', [ScoresController::class, 'store'])->name('scores.store');


Route::delete('dashboard/scores/destroy/{id}', [ScoresController::class, 'destroy'])->name('scores.destroy');

///players
Route::get('dashboard/players', [PlayersController::class, 'index']) ->name('players');

Route::get('dashboard/players/show/{id}', [PlayersController::class, 'show'])->name('players.show');


Route::get('dashboard/players/edit/{id}', [PlayersController::class, 'edit'])->name('players.edit');

Route::put('dashboard/players/{id}', [PlayersController::class, 'update'])->name('players.update');


Route::get('dashboard/players/create', [PlayersController::class, 'create'])->name('players.create');

Route::post('dashboard/players/store', [PlayersController::class, 'store'])->name('players.store');


Route::delete('dashboard/players/destroy/{id}', [PlayersController::class, 'destroy'])->name('players.destroy');

});


