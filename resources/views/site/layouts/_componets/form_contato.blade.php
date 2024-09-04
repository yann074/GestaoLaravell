{{ $slot }}


{{--Para incluir o html da outra pagina--}}

{{--$x--}}
{{--Para buscar a variavel da outra pagina, tem que usar nos dois lugares--}}
{{--Da para usar com um css também--}}

{{--rota para save--}}

<form action={{route('site.contato')}} method="POST">
    @csrf
    {{--é usado para gerar um token para o post--}}
    <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="borda-preta" >
    <br>
    <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="borda-preta">
    <br>
    <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="borda-preta">
    <br>

    <select name="motivo_contato" class="borda-preta">
        <option value="" >Qual o motivo do contato?</option>

        @foreach ( $motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{old('motivo_contato') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach

        {{--<option value="1" {{old('motivo_contato') == 1 ? 'selected' : ''}} >Dúvida</option>
        <option value="2" {{old('motivo_contato') == 2 ? 'selected' : ''}}>Elogio</option>
        <option value="3" {{old('motivo_contato') == 3 ? 'selected' : ''}}>Reclamação</option>--}}
    </select>
    <br>
    <textarea name="mensagem" value="{{old('mensagem')}}" class="borda-preta">@if(old('mensagem') != ''){{old('mensagem')}} @else Preencha aqui a sua mensagem @endif </textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>

{{--Para ver os errors das views--}}
<pre>
    {{print_r($errors)}}
</pre>