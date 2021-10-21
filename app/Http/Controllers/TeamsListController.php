<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Team;

use Illuminate\Http\Request;

class TeamsListController extends Controller
{
    public function index(){

        $teams = Team::all();
        $scores = Score::all();
        
       
        return view('dashboard', compact('teams','scores'));//

    }

    public function show($id){
        $team = Team::find($id);//el método find() encuentra un registro por su id
                
        return view('list.show', compact('team') );
    }

    public function edit($id){
        $team = Team::find($id);//el método find() encuentra un registro por su id


       
        return view('list.edit', $team);   

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
        return redirect()->route('list.show',['id'=>$team->id , 'updt'=> true ]);

    }

    public function create(){
       
        return view('list.create');

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

            return redirect()->route('list.show',['id'=>$team->id , 'new'=> true ]);
    }

    public function destroy($id){
        $team = Team::find($id);
        $team ->delete();
        return redirect()->route('list');

    }

}
