<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{   
    /**
     * Show the form to Login User.
     *
     * @return Response
     */

    public function index(){
        return view('catalog.index');

    }

    public function show($id){
        return view('catalog.show', ['id'=>$id] );
    }

    
    public function edit($id){
        return view('catalog.edit', ['id'=>$id]);   

    }

    public function update(Request  $request){
        $validatedData = $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'publicacion' => 'required',
        ]); 

        ///actualiza el registro 

        return view('catalog.update');
    }

    /**
     * POST - create is succesful.
     *
     * @param  Request  $request
     * @return Response
     */
    
    

    public function create(){
       
        return view('catalog.create');

    }

    public function store(Request  $request){
        $validatedData = $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'publicacion' => 'required',
        ]); 

        return view('catalog.created');
    }




}
