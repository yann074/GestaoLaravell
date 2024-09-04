<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//fornecedors


class Fornecedor extends Model
{
    use HasFactory;
    //buscar a classe softDeletes
    use SoftDeletes;
    
    //mudança no migration de criar fornecedors


    protected $table = 'fornecedors';
    //para mudar o nome da tabela usada no bd
    //é uma variavel reservada

    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
