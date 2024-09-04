<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [ 
            0 => [ 
                'nome' => 'Fornecedor 1',
                'status' => 'n',
                'cnpj' => '0',
                'ddd' => '74',
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 's',
                'cnpj' => null,
                'ddd' => '11',
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 's',
                'cnpj' => null,
                'ddd' => '21',
                'telefone' => '0000-0000'
            ]
    ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
