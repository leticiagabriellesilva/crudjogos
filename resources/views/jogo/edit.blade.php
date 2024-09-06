@extends('base')

@section('conteudo')
<form action="/jogos/{{$objetoJogo->id}}" method="post" class="form-game">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="{{empty(old('nome')) ? $objetoJogo->nome : old('nome')}}" class="form-control" />
        @if ($errors->has('nome'))
            <p>{{$errors->first('nome')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="number" name="preco" step="0.01" value="{{empty(old('preco')) ? $objetoJogo->preco : old('preco')}}" class="form-control" />
        @if ($errors->has('preco'))
            <p>{{$errors->first('preco')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="desenvolvedor">Desenvolvedores:</label>
        <input type="text" name="desenvolvedor" value="{{empty(old('desenvolvedor')) ? $objetoJogo->desenvolvedor : old('desenvolvedor')}}" class="form-control" />
        @if ($errors->has('desenvolvedor'))
            <p>{{$errors->first('desenvolvedor')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="distribuidor">Distribuidores:</label>
        <input type="text" name="distribuidor" value="{{empty(old('distribuidor')) ? $objetoJogo->distribuidor : old('distribuidor')}}" class="form-control" />
        @if ($errors->has('distribuidor'))
            <p>{{$errors->first('distribuidor')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="genero">Gênero:</label>
        <input type="text" name="genero" value="{{empty(old('genero')) ? $objetoJogo->genero : old('genero')}}" class="form-control" />
        @if ($errors->has('genero'))
            <p>{{$errors->first('genero')}}</p>
        @endif
    </div>
    <div class="form-actions">
        <input type="submit" value="Enviar" class="btn btn-success" />
        <a href="/jogos" class="btn btn-secondary">Voltar</a>
    </div>
</form>
@endsection
