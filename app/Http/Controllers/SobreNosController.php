<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{

    public function SobreNos(){
        return view('site.sobre-nos');
    }
}
