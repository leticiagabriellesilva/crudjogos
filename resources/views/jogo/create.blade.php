@extends('base')

@section('conteudo')
<form action="/jogos" method="post" class="form-game">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control" value="{{old('nome')}}" />
        @if ($errors->has('nome'))
            <p>{{errors->first('nome')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="number" name="preco" step="0.01" class="form-control" value="{{old('preco')}}" />
        @if ($errors->has('preco'))
            <p>{{errors->first('preco')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="desenvolvedor">Desenvolvedores:</label>
        <input type="text" name="desenvolvedor" class="form-control" value="{{old('desenvolvedor')}}" />
        @if ($errors->has('desenvolvedor'))
            <p>{{errors->first('desenvolvedor')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="distribuidor">Distribuidores:</label>
        <input type="text" name="distribuidor" class="form-control" value="{{old('distribuidor')}}" />
        @if ($errors->has('distribuidor'))
            <p>{{errors->first('distribuidor')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="genero">Gênero:</label>
        <input type="text" name="genero" class="form-control" value="{{old('genero')}}" />
        @if ($errors->has('genero'))
            <p>{{errors->first('genero')}}</p>
        @endif
    </div>
    <div class="form-actions">
        <input type="submit" value="Enviar" class="btn btn-success" />
        <a href="/jogos" class="btn btn-secondary">Voltar</a>
    </div>
</form>
@endsection
