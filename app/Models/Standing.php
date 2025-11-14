<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    protected $fillable = [
        'championship_id',
        'team_id',
        'points',
        'matches_played',
        'matches_won',
        'matches_drawn',
        'matches_lost',
        'goals_for',
        'goals_against',
        'goal_difference',
    ];

    public function championship()
    {
        return $this->belongsTo(Championship::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
