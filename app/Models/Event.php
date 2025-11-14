<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'game_id',
        'team_id',
        'player_id',
        'event_type_id',
        'minute',
        'description'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function eventType()
    {
        return $this->belongsTo(EventType::class);
    }
}
