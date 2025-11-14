<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchState extends Model
{
    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];

    public function games()
    {
        return $this->hasMany(Game::class, 'state_id');
    }
}
