<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function Contato(Request $request){
        
        /*print_r($request->all());
        echo $request->input('nome');
        echo $request->input('email'); // name usado no form */
       
        
        /*
        //criar uma instancia do Site Contato
        $contato = new SiteContato();

        //buscar os dados da request
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        //print_r($contato->getAttributes());

        //salvar os dados
        $contato->save(); */

       /* $contato = new SiteContato();


        //$contato->create($request->all());
        //pode salvar assim também

        //ele retorna com um array assosciativo
        $contato->fill($request->all());

        print_r($contato->getAttributes());

        $contato->save();
        */

        /*  
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $contatos->save();
        } */

        $motivo_contatos = MotivoContato::all();

        /*$motivo_contatos = [
            '1' => 'duvida',
            '2' => 'elogio',
            '3' => 'reclamação'
        ];*/

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){

        //validar os dados recebidos no request
        //validate sabe que se n tiver redirect na função,
        //ele volta uma rota, consequentemente sobe para a de cima que tem
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'motivo_contato' => 'required|integer',
            'mensagem' => 'required|string|max:500',
        ]);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
        
    }
}
