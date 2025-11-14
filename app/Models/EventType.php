<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];

    public function events()
    {
        return $this->hasMany(Event::class, 'event_type_id');
    }
}
