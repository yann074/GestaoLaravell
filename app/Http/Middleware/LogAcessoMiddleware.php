<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\LogAcesso;
use Symfony\Component\HttpFoundation\Response;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //$request - manipular
        //return $next($request);

        //esse log serve para salvar os acessos no banco de dados, no bd ele recebeu a Rota Ap
        //LogAcesso::create(['log' => 'Rota AP']);
        //return Response('chegamos aq');

        //ter o ip
        $ip = $request->server->get('REMOTE_ADDR');
        //ter a rota, para mais informações basta usar o dd($request), para saber os
        //dados
        $rota = $request->getRequestUri();


        //isso vai fazer com que guarde o ip do usuario e a rota dele no horário que entrou
        //{{é bom fazer}}
        LogAcesso::create(['log' => "$ip e a rota $rota"]);

        return Response('deu certo aqui');
    }
}
