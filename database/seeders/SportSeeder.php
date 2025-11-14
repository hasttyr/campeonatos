<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sport;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sports = [
            ['name' => 'Football',     'description' => 'Fútbol (11 vs 11)', 'rules' => null],
            ['name' => 'Basketball',   'description' => 'Baloncesto (5 vs 5)', 'rules' => null],
            ['name' => 'Volleyball',   'description' => 'Voleibol estándar',  'rules' => null],
        ];
        foreach ($sports as $sport) {
            Sport::firstOrCreate(['name' => $sport['name']], $sport);
        }
    }
}
