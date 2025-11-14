<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'championship_id',
        'team_id',
        'details'
    ];
    protected $casts = [
        'details' => 'array',
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
