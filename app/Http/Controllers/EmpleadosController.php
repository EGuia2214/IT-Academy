<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadosController extends Controller
{
 /**
     * Show the form to Login User.
     *
     * @return Response
     */

    public function index(){

        $empleados = Empleado::paginate(10);//paginación. El método para ver todos seguidos es all
        //return $empleados;

        return view('empleados.index', compact('empleados'));//

    }

    public function show($id){
        $empleado = Empleado::find($id);//el método find() encuentra un registro por su id
                
        return view('empleados.show', compact('empleado') );
    }

    
    public function edit($id){
        $empleado = Empleado::find($id);//el método find() encuentra un registro por su id


       
        return view('empleados.edit', $empleado);   

    }

    public function update(Request $request, $id){
        
        $validatedData = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'profesion' => 'required',
        ]); 
        
        $empleado = Empleado::find($id);
        $empleado -> nombre = $request -> nombre;
        $empleado -> apellido = $request -> apellido;
        $empleado -> profesion = $request -> profesion;
        $empleado -> save();
        $updt = true;
       
        ///actualiza el registro 
        return redirect()->route('empleados.show',['id'=>$empleado->id , 'updt'=> true ]);

        ///return view('empleados.update');
    }

    /**
     * POST - create is succesful.
     *
     * @param  Request  $request
     * @return Response
     */
    
    

    public function create(){
       
        return view('empleados.create');

    }

    public function store(Request  $request){
        $validatedData = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'profesion' => 'required',
        ]); 

        $empleado = new Empleado();
            $empleado -> nombre = $request -> nombre;
            $empleado -> apellido = $request -> apellido;
            $empleado -> profesion = $request -> profesion;
            $empleado -> save();
            $new = true;

            return redirect()->route('empleados.show',['id'=>$empleado->id , 'new'=> true ]);
    }

    public function destroy($id){
        $empleado = Empleado::find($id);
        $empleado ->delete();
        return redirect()->route('.index');

    }
}
