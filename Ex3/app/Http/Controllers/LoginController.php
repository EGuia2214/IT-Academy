<?php
namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show the form to Login User.
     *
     * @return Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * POST - Login is succesful.
     *
     * @param  Request  $request
     * @return Response
     */
    
    
     public function access(Request $request)
    {
        //dd ('pasó');
        // Validate login...
        $validatedData = $request->validate([
            'user' => 'required|email',
            'pass' => 'required',
        ]);

        return redirect()->route('catalog.index');//quisiera pasarle el usuario
        //si la validación es correcta redirigir a la vista welcome

    }
}




/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');// auth/login también es válido
        
    }

    public function access(Request $request){

        $request->validate([
            'user' => 'required'
        ]);

        return view('auth.welcome');
    }

}  */  

