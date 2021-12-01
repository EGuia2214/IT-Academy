<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Score extends Model
{
    use HasFactory;

    public function local(){
        {
            return $this->belongsTo(Team::class, 'local_team', 'id');
        }

    }

    public function visitor(){
        {
            return $this->belongsTo(Team::class, 'visitor_team', 'id');
        }

    }
}
