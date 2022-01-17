<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index() {
        //
    }

    public function read($id){
        $user=User::find($id);
              
        return view('show', compact('user'));


    }

    public function show($id){
        return view('catalog.show', ['id'=>$id] );
    }
}
