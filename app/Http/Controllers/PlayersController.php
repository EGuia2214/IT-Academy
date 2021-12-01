<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;


use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:players')->only('index');
        $this->middleware('can:players.show')->only('show');
        $this->middleware('can:players.edit')->only('edit', 'update');
        $this->middleware('can:players.create')->only('create', 'store');
        $this->middleware('can:players.destroy')->only('destroy');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
                
       
        return response()->json(compact ('players'));
        //No hay creadas vistas para las rutas Player
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $player = Player::find($id);//el método find() encuentra un registro por su id

        return response()->json(compact ('player'));               
        //No hay creadas vistas para las rutas Player
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return "Vista formulario de creacion de jugador ";
        //No hay creadas vistas para las rutas Player

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request){
        $validatedData = $request->validate([
            'player_name' => 'required', //'team_name' es el nombre del campo en el formulario
            'player_team' => 'required|numeric',
            'age' => 'required|numeric',
            'year_of_birth' => 'required|numeric',
        ]); 

        $player = new Player();
        $player -> player_name = $request -> player_name;
        $player -> player_team = $request -> player_team;
        $player -> age = $request -> age;
        $player -> year_of_birth = $request -> year_of_birth;
        $player -> save();
            $new = true;

            echo "Nuevo Jugador:";//para visualizar en postman
            return response()->json(compact ('player'));
            //return redirect()->route('list.show',['id'=>$player->id , 'new'=> true ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $player = Player::find($id);//el método find() encuentra un registro por su id

        echo "Formulario de edición de equipo:";//para visualizar en postman
    
        return response()->json(compact ('player'));   
        //No hay creadas vistas para las rutas Player  

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'player_name' => 'required', //'team_name' es el nombre del campo en el formulario
            'player_team' => 'required|numeric',
            'age' => 'required|numeric',
            'year_of_birth' => 'required|numeric',
        ]); 

        $player = Player::find($id);
        $player -> player_name = $request -> player_name;
        $player -> player_team = $request -> player_team;
        $player -> age = $request -> age;
        $player -> year_of_birth = $request -> year_of_birth;
        $player -> save();


            echo "Nuevo Jugador:";//para visualizar en postman
            return response()->json(compact ('player'));
            //return redirect()->route('list.show',['id'=>$player->id , 'new'=> true ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        $player -> delete();
        
        return "Jugador ".$id." eliminado";
        //
    }
}
