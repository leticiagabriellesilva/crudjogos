@extends('base')
@section('conteudo')

<dl class="jogo-detalhes">
    <dt>Nome</dt>
    <dd>{{$objetoJogo->nome}}</dd>
    <dt>Preço</dt>
    <dd>{{$objetoJogo->preco}}</dd>
    <dt>Desenvolvedor</dt>
    <dd>{{$objetoJogo->desenvolvedor}}</dd>
    <dt>Distribuidor</dt>
    <dd>{{$objetoJogo->distribuidor}}</dd>
    <dt>Gênero</dt>
    <dd>{{$objetoJogo->genero}}</dd>
</dl>

<form action="/jogos/{{$objetoJogo->id}}" method="post" class="jogo-formulario">
        @csrf
        @method('delete')
    <input type="submit" value="Confirmar" class="btn-confirmar" />
    <a href="/jogos" class="btn-voltar">Voltar</a>
</form>
@endsection
