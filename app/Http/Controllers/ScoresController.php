<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Team;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ScoresController extends Controller
{
    public function index(){

        $teams = Team::all();
        $scores = Score::all();
        
       
        return view('dashboard', compact('teams','scores'));//

    }

    public function show($id){
        $teams = Team::all();
        $score = Score::find($id);//el método find() encuentra un registro por su id
                        
        return view('scores.show', compact('teams','score') );
    }

    public function edit($id){
        $score = Score::find($id);//el método find() encuentra un registro por su id
        $teams = Team::all();
        

        return view('scores.edit', compact ('teams','score'));   

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
        return redirect()->route('scores.show',['id'=>$score->id , 'updt'=> true ]);

    }


    public function create(){
        $teams = Team::all();
       
        return view('scores.create', compact('teams') );

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

            return redirect()->route('scores.show',['id'=>$score->id , 'new'=> true ]);
    }

    public function destroy($id){
        $score = Score::find($id);
        $score ->delete();
        return redirect()->route('list');

    }
}
