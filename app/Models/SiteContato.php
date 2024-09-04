<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{   
    //para usar o fill no controller é necessario usar o fillable
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo_contato',
        'mensagem'
    ];
    use HasFactory;
}
