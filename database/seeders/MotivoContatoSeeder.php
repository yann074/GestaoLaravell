<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\MotivoContato;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        MotivoContato::create([
           'motivo_contato' => 'Duvida' //motivo contato ta na table
        ]);
        MotivoContato::create([
           'motivo_contato' => 'Elogio'
        ]);
        MotivoContato::create([
           'motivo_contato' => 'Reclamação'
        ]);
    }
}
