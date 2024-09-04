<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Fornecedor;
//insert precisa desse use db
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //instacia
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'BA';
        $fornecedor->email = 'fornecedor100@gmail.com';
        $fornecedor->save();


        //com metodo create, com fillable
        Fornecedor::create([
            //ver quais objetos podem ser preenchidos, o fillable no caso
            'nome' => 'Fornecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'BA',
            'email' => 'fornecedor200@gmail.com'
        ]);

        //insert, esse precisa ser o nome exatamente do bd, no caso fornecedors
        //menos ultilizada
        DB::table('fornecedors')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'fornecedor300.com.br',
            'uf' => 'RJ',
            'email' => 'fornecedor300@gmail.com'
        ]);
    }
}
