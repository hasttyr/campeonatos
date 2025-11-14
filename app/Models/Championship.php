<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    protected $fillable = [
        'id',
        'name',
        'slug',
        'sport_id',
        'organizer_id',
        'description',
        'start_date',
        'end_date',
        'state_id',
        'rules',
        'points_win',
        'points_draw',
        'points_loss',
        'max_teams',
        'format',
        'location',
        'is_active'
    ];

    protected $casts = [
        'rules' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'is_active' => 'boolean'
    ];

    // Relaciones
    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }
    public function state()
    {
        return $this->belongsTo(ChampionshipState::class);
    }
    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
