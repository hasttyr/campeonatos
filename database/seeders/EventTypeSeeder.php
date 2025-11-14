<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventType;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'goal',           'display_name' => 'Gol'],
            ['name' => 'yellow_card',    'display_name' => 'Tarjeta amarilla'],
            ['name' => 'red_card',       'display_name' => 'Tarjeta roja'],
            ['name' => 'substitution',   'display_name' => 'Sustitución'],
            ['name' => 'injury',         'display_name' => 'Lesión'],
            ['name' => 'temporary_card', 'display_name' => 'Tarjeta temporal'],
            ['name' => 'expulsion',      'display_name' => 'Expulsión'],
            ['name' => 'penalty',        'display_name' => 'Penal'],
            ['name' => 'own_goal',       'display_name' => 'Autogol'],
            ['name' => 'assist',         'display_name' => 'Asistencia'],
            ['name' => 'other',          'display_name' => 'Otro'],
        ];
        foreach ($types as $type) {
            EventType::firstOrCreate(['name' => $type['name']], $type);
        }
    }
}
