<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*$siteContato = new SiteContato;
        $siteContato->nome = 'Sistema SG';
        $siteContato->telefone = '(11) 21030103';
        $siteContato->email = 'contato@sg.com.br';
        $siteContato->motivo_contato =  1;
        $siteContato->mensagem = 'Seja bem vindo ao sistema';
        $siteContato->save();*/

        //vem do factory
        SiteContato::factory()->count(1)->create();
                                   //factory         //100 dados  //criar os dados


    }
}
