<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MatchState;

class MatchStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['name' => 'pending',      'display_name' => 'Pendiente',      'description' => 'Partido no programado.'],
            ['name' => 'scheduled',    'display_name' => 'Programado',     'description' => 'Partido programado, no iniciado.'],
            ['name' => 'in_play',      'display_name' => 'En juego',       'description' => 'Partido en curso.'],
            ['name' => 'suspended',    'display_name' => 'Suspendido',     'description' => 'Partido suspendido temporalmente.'],
            ['name' => 'finished',     'display_name' => 'Finalizado',     'description' => 'Partido finalizado.'],
            ['name' => 'cancelled',    'display_name' => 'Cancelado',      'description' => 'Partido cancelado.'],
        ];
        foreach ($states as $state) {
            MatchState::firstOrCreate(['name' => $state['name']], $state);
        }
    }
}
