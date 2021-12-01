<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Team;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ScoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:scores')->only('index');
        $this->middleware('can:scores.show')->only('show');
        $this->middleware('can:scores.edit')->only('edit', 'update');
        $this->middleware('can:scores.create')->only('create', 'store');
        $this->middleware('can:scores.destroy')->only('destroy');

    }


    public function index(){

        $scores = Score::all();
        
       
        //return view('dashboard', compact('teams','scores'));//
        return response()->json(compact ('scores'));

    }

    public function show($id){
        $teams = Team::all();//el modelo Team aparece para poder mostrar los nombres de los equipos en la vista
        $score = Score::find($id);//el método find() encuentra un registro por su id
                        
        //return view('scores.show', compact('teams','score') );
        return response()->json(compact ('score'));
    }

    public function edit($id){
        $score = Score::find($id);//el método find() encuentra un registro por su id
        $teams = Team::all();

        echo "Formulario de edición de equipo:";//para visualizar en postman
        

        //return view('scores.edit', compact ('teams','score'));
        return response()->json(compact ('score'));  

    }

    public function update(Request $request, $id){
        $teams = Team::all();

        $validatedData = $request->validate([
            'local_team' => 'required', 
            'local_score' => 'required|numeric',
            'visitor_team' => 'required',
            'visitor_score' => 'required|numeric',
        ]); 
        
        $score = Score::find($id);
        $score -> local_team = $request -> local_team;
        $score -> local_score = $request -> local_score;
        $score -> visitor_team = $request -> visitor_team;
        $score -> visitor_score = $request -> visitor_score;
        $score -> save();
        $updt = true;
       
        ///actualiza el registro 
        //return redirect()->route('scores.show',['id'=>$score->id , 'updt'=> true ]);
        return response()->json(compact('score'));
    }


    public function create(){
        $teams = Team::all();
       
        //return view('scores.create', compact('teams') );
        return "Vista formulario de creación de partido ";

    }

    public function store(Request  $request){
        $validatedData = $request->validate([
            'local_team' => 'required', 
            'local_score' => 'required|numeric',
            'visitor_team' => 'required',
            'visitor_score' => 'required|numeric',
  
            


        ]); 

        $score = new Score();
        $score -> local_team = $request -> local_team;
        $score -> local_score = $request -> local_score;
        $score -> visitor_team = $request -> visitor_team;
        $score -> visitor_score = $request -> visitor_score;
        $score -> save();
            $new = true;

            return response()->json(compact('score'));
           // return redirect()->route('scores.show',['id'=>$score->id , 'new'=> true ]);
    }

    public function destroy($id){
        $score = Score::find($id);
        $score ->delete();


        //return redirect()->route('list');
        return "Eliminado registro ". $id ;

    }
}