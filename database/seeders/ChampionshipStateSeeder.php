<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ChampionshipState;

class ChampionshipStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['name' => 'planned',       'display_name' => 'Planeado',       'description' => 'Campeonato aún no iniciado.'],
            ['name' => 'registrations', 'display_name' => 'Inscripciones',  'description' => 'Período de inscripción abierto.'],
            ['name' => 'ongoing',       'display_name' => 'En curso',       'description' => 'Campeonato en progreso.'],
            ['name' => 'finished',      'display_name' => 'Finalizado',     'description' => 'Campeonato finalizado.'],
            ['name' => 'cancelled',     'display_name' => 'Cancelado',      'description' => 'Campeonato cancelado.'],
        ];
        foreach ($states as $state) {
            ChampionshipState::firstOrCreate(['name' => $state['name']], $state);
        }
    }
}
