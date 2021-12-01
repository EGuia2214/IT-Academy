<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $player1 = new Player;
        $player1 -> player_name = 'Kylian Mbappé';
        $player1 -> player_team = '3';
        $player1 -> age = '22';
        $player1 -> year_of_birth = '1998';
        $player1 -> save();

        $player2 = new Player;
        $player2 -> player_name = 'Ansu Fati';
        $player2 -> player_team = '1';
        $player2 -> age = '19';
        $player2 -> year_of_birth = '2002';
        $player2 -> save();

        $player3 = new Player;
        $player3 -> player_name = 'Zlatan Ibrahimović';
        $player3 -> player_team = '2';
        $player3 -> age = '40';
        $player3 -> year_of_birth = '1981';
        $player3 -> save();

        $player4 = new Player;
        $player4 -> player_name = 'Robert Lewandowski';
        $player4 -> player_team = '4';
        $player4 -> age = '33';
        $player4 -> year_of_birth = '1988';
        $player4 -> save();

        $player5 = new Player;
        $player5 -> player_name = 'Joe Hart';
        $player5 -> player_team = '6';
        $player5 -> age = '33';
        $player5 -> year_of_birth = '1988';
        $player5 -> save();





    }
}
