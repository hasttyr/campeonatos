<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'game_id',
        'team_id',
        'score',
        'winner',
        'details'
    ];
    protected $casts = [
        'winner' => 'boolean',
        'details' => 'array',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
