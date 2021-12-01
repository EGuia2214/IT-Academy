<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Player extends Model
{
    use HasFactory;

    public function TeamIs(){
        {
            return $this->belongsTo(Team::class, 'player_team', 'id');
        }

    }
}
