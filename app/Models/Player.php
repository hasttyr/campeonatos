<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'id',
        'team_id',
        'first_name',
        'last_name',
        'user_id',
        'number',
        'birth_date',
        'position',
        'document',
        'attributes'
    ];

    protected $casts = [
        'attributes' => 'array',
        'birth_date' => 'date',
    ];

    // Relaciones
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
