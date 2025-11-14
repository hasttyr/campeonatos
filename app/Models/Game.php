<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'championship_id',
        'home_team_id',
        'away_team_id',
        'scheduled_at',
        'location',
        'state_id',
        'home_score',
        'away_score',
    ];
    protected $casts = [
        'scheduled_at' => 'datetime',
    ];

    public function championship()
    {
        return $this->belongsTo(Championship::class);
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    public function state()
    {
        return $this->belongsTo(MatchState::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
