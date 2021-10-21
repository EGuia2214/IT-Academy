<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Score;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $score1 = new Score;
        $score1 -> local_team = '1';
        $score1 -> local_score = '0';
        $score1 -> visitor_team = '2';
        $score1 -> visitor_score = '0';
        $score1 -> save();


        $score2 = new Score;
        $score2 -> local_team = '3';
        $score2 -> local_score = '2';
        $score2 -> visitor_team = '4';
        $score2 -> visitor_score = '1';
        $score2 -> save();


        $score2 = new Score;
        $score2 -> local_team = '5';
        $score2 -> local_score = '5';
        $score2 -> visitor_team = '6';
        $score2 -> visitor_score = '1';
        $score2 -> save();
    }
}
