<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        return view('catalog.index');

    }

    public function show($id){
        return view('catalog.show', ['id'=>$id] );
    }

    public function create(){
        return view('catalog.create');

    }

    public function edit($id){
        return view('catalog.edit', ['id'=>$id]);   

    }
}
