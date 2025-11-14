<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'id',
        'championship_id',
        'name',
        'slug',
        'logo',
        'description',
        'coach_id',
        'attributes'
    ];

    protected $casts = [
        'attributes' => 'array',
    ];

    // Relaciones
    public function championship()
    {
        return $this->belongsTo(Championship::class);
    }
    public function coach()
    {
        return $this->belongsTo(User::class, 'coach_id');
    }
    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function gamesHome()
    {
        return $this->hasMany(Game::class, 'home_team_id');
    }
    public function gamesAway()
    {
        return $this->hasMany(Game::class, 'away_team_id');
    }
}
