<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function __invoke($nombre = null){//la variable nombre la defino como opcional en la ruta: Route::get('/{nombre?}', HomeController::class);

            return view('welcome',['nombre'=>$nombre]);

        }
        
    //
}
