<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __invoke() {
        return "<h1>Pantalla Principal</h1>";
    //return view('welcome');
    }
}
