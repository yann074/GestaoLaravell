@extends('site.layouts.basico')
{{--buscar os dados dessa pag--}}

{{--include da pra usar tbm (inclui toda a view onde ele incluir), o extends nao 
necessariamente--}}

{{--@include('site.layouts.basico')  -- para incluir usa assim--}}


@section('titulo', 'Contato'){{--$contato--}}
{{--Titulo ta definido como yield no basico e para alterar usando parametros, usa o nome
definido e depois passar uma string do que quer mudar--}}

{{--Pode receber variavel também do controlador --}}

@section('conteudo')

<div class="topo">

    <div class="logo">
        <img src="{{asset('img/logo.png')}}">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('site.index') }}">Principal</a></li>
            <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>
        </ul>
    </div>
</div>

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            @component('site.layouts._componets.form_contato', ['x' => 10, 'motivo_contatos' => $motivo_contatos])
            {{--Enviar parametros para o componente--}}
            @endcomponent
            {{--usar como component--}}
        </div>
    </div>  
</div>


<div class="rodape">
    <div class="redes-sociais">
        <h2>Redes sociais</h2>
        <img src="{{asset('img/facebook.png')}}">
        <img src="{{asset('img/linkedin.png')}}">
        <img src="{{asset('img/youtube.png')}}">
    </div>
    <div class="area-contato">
        <h2>Contato</h2>
        <span>(11) 3333-4444</span>
        <br>
        <span>supergestao@dominio.com.br</span>
    </div>
    <div class="localizacao">
        <h2>Localização</h2>
        <img src="{{asset('img/mapa.png')}}">
    </div>
</div>

@endsection
