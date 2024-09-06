@extends('base')

@section('conteudo')
    <div class="action-bar">
        <a class="btn btn-primary" href="/jogos/create">Adicionar Novo Jogo</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Desenvolvedor</th>
                <th>Distribuidor</th>
                <th>Gênero</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($JogoCollection as $jogo)
                <tr>
                    <td>{{ $jogo->nome }}</td>
                    <td>{{ $jogo->preco }}</td>
                    <td>{{ $jogo->desenvolvedor }}</td>
                    <td>{{ $jogo->distribuidor }}</td>
                    <td>{{ $jogo->genero }}</td>
                    <td>
                        <a href="/jogos/{{$jogo->id}}/edit" class="btn btn-edit">Editar</a>
                        <a href="/jogos/{{$jogo->id}}" class="btn btn-delete">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $JogoCollection->links() }}
@endsection

