<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        return "<h1>Llista Llibres</h1>";

    }

    public function show($id){
        return "<h1>Vista detall libre {id}</h1>";
    }

    public function create(){
        return "<h1>Afegir llibre</h1>";

    }

    public function edit($id){
        return "<h1>Modificar llibre {id}</id>";    

    }
}
