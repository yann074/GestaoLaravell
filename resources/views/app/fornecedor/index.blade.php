{{--COMENTÁRIO AQUI --}}

{{--$fornecedores--}}

{{--nao vai array --}}

<h1>a</h1>

@php
   /* @if () {
        
    }
    @else {
        
    }*/
@endphp

{{--esse dd é para suportar um array--}}


@if (count($fornecedores) == 1)
    <h1>Tem 1 cadastrado</h1>
@else
    <h2>nao tem</h2>
@endif


{{--esse unless é igual a negação com o !--}}
@unless (count($fornecedores) == 0)
    <h4>vai aparecer isso</h4>
@endunless

{{--Ver se o fornecedor está definido aqui na view--}}
@isset($fornecedores)
    <h4>esta setado</h4>
@endisset

{{--Verificar se o valor é vazio, sem valor--}}
@empty($fornecedores)
<h2>vazio</h2>

{{--ele funciona como um default, caso seja false, null ele retorna esse valor--}}
{{--{{$fornecedores ?? ''}}--}}
@endempty

@{{}}


{{--$loop->interation apenas while e foreach--}}
{{--$loop->first se for o primeiro retorna true--}}
{{--$loop->last se for o último retorna true--}}
{{--$loop->count conta a quantidade de já "salvos"--}}


{{----}}
    @switch($fornecedores[1]['ddd'])
    @case('11')
        <h2>SP</h2>
        @break
    @case('74')
        <h2>BA</h2>
        @break
    @case('21')
        <h2>RJ</h2>
    @default
@endswitch


{{--@dd($loop)--}}

@dd($fornecedores)


{{--view:clear pra reestartar as views--}}

{{--php -r "var_dump(extension_loaded('pdo_mysql'));"
bool(true)

Serve para verificar se a extensão esta carregada, nesse caso o pdo_mysql--}}