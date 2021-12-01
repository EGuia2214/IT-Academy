<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Team extends Model
{
    use HasFactory;

    public function players()
    {
        return $this->hasMany(Player::class, 'player_team', 'id');

        //return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    }

    

}
