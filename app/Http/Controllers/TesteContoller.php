<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteContoller extends Controller
{
    public function teste( $p1,int $p2){
        //echo "a soma de $p1 + $p2 = " . $p2;

        //return view('site.teste', ['x'=> $p1, 'y' => $p2]); array assoc

        //return view('site.teste', compact($p1, $p2)); compact

        return view('site.teste')->with('x', $p1)->with('y' , $p2);
    }
}
