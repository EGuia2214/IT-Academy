<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;
use Carbon\Carbon;//al final no lo uso. El error que daba era por el año de fundación de los equipos (antes de 1900)

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team1 = new Team;
        $team1 -> team_name = "FC Barcelona";
        $team1 -> stadium = "Camp Nou";
        $team1 -> foundation_year = "1899";
        $team1 -> city = "Barcelona";
        $team1 -> save();

        $team2 = new Team;
        $team2 -> team_name = "AC Milan";
        $team2 -> stadium = "San Siro";
        $team2 -> foundation_year = "1899";
        $team2 -> city = "Milan";
        $team2 -> save();

        $team3 = new Team;
        $team3 -> team_name = "Paris Saint Germain";
        $team3 -> stadium = "Parc des Princes";
        $team3 -> foundation_year = "1970";
        $team3 -> city = "Paris";
        $team3 -> save();

        $team4 = new Team;
        $team4 -> team_name = "Bayern Munchen";
        $team4 -> stadium = "Allianz Arena";
        $team4 -> foundation_year = "1900";
        $team4 -> city = "Munich";
        $team4 -> save();

        $team5 = new Team;
        $team5 -> team_name = "Manchester United";
        $team5 -> stadium = "Old Trafford";
        $team5 -> foundation_year = "1878";
        $team5 -> city = "Manchester";
        $team5 -> save();

        $team6 = new Team;
        $team6 -> team_name = "Celtic FC";
        $team6 -> stadium = "Celtic Parc";
        $team6 -> foundation_year = "1878";
        $team6 -> city = "Glasgow";
        $team6 -> save();
    
    }
}
