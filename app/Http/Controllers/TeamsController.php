<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Team;

use Illuminate\Http\Request;

class TeamsController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:teams')->only('index');
        $this->middleware('can:teams.show')->only('show');
        $this->middleware('can:teams.edit')->only('edit', 'update');
        $this->middleware('can:teams.create')->only('create', 'store');
        $this->middleware('can:teams.destroy')->only('destroy');

    }
    
    public function index(){

        $teams = Team::all();
                
       
        return response()->json(compact ('teams'));
        //return view('teams', compact('teams'));//

    }

    public function show($id){
        $team = Team::find($id);//el método find() encuentra un registro por su id

        return response()->json(compact ('team'));               
        //return view('teams.show', compact('team') );
    }

    public function edit($id){
        $team = Team::find($id);//el método find() encuentra un registro por su id

        echo "Formulario de edición de equipo:";//para visualizar en postman
    
        return response()->json(compact ('team'));   
        //return view('teams.edit', $team);   

    }

    public function update(Request $request, $id){
        
        $validatedData = $request->validate([
            'team_name' => 'required', //'team_name' es el nombre del campo en el formulario
            'stadium' => 'required',
            'foundation_year' => 'required',
            'city' => 'required',
        ]); 
        
        $team = Team::find($id);
        $team -> team_name = $request -> team_name;
        $team -> stadium = $request -> stadium;
        $team -> foundation_year = $request -> foundation_year;
        $team -> city = $request -> city;
        $team -> save();
        $updt = true;
       
        ///actualiza el registro 
        //return redirect()->route('list.show',['id'=>$team->id , 'updt'=> true ]);
        return response()->json(compact ('team'));  //Json del equipo
    }

    public function create(){

        return "Vista formulario de creacion de equipo ";
        //return view('list.create')

    }

    public function store(Request  $request){
        $validatedData = $request->validate([
            'team_name' => 'required', //'team_name' es el nombre del campo en el formulario
            'stadium' => 'required',
            'foundation_year' => 'required',
            'city' => 'required',
        ]); 

        $team = new Team();
        $team -> team_name = $request -> team_name;
        $team -> stadium = $request -> stadium;
        $team -> foundation_year = $request -> foundation_year;
        $team -> city = $request -> city;
        $team -> save();
            $new = true;

            echo "Nuevo equipo:";//para visualizar en postman
            return response()->json(compact ('team'));
            //return redirect()->route('list.show',['id'=>$team->id , 'new'=> true ]);
    }

    public function destroy($id){
        $team = Team::find($id);
        $team_name = $team -> team_name; //creo esta variable para mostrar nombre equipo en POstman
        $team ->delete();

        return $team_name. " eliminado";
        //return redirect()->route('list');

    }

}
