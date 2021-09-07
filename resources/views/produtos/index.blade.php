@extends('layouts.template')

@section('titulo', 'Página Produtos - Listagens')

@section('conteudo')

    <h2>Página Produtos - Listagens</h2>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
            <th>VALOR</th>
        </tr>
        @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->valor }}</td>
            </tr>
        @endforeach
    </table>
    <div>
        {{ $produtos->links()}}
    </div> 
    

@endsection