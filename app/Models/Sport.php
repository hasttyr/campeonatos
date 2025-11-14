<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable = [
        'name',
        'description',
        'rules',
    ];

    protected $casts = [
        'rules' => 'array',
    ];

    public function championships()
    {
        return $this->hasMany(Championship::class);
    }
}
