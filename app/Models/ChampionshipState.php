<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChampionshipState extends Model
{
    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];

    public function championships()
    {
        return $this->hasMany(Championship::class, 'state_id');
    }
}
