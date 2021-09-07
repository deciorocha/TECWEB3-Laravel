@extends('layouts.template')

@section('titulo', 'Página Categorias - Listagens')

@section('conteudo')

    <h2>Página Categorias - Listagens</h2>


    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>NOME</th>
        </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nome }}</td>

            </tr>
        @endforeach
    </table>
    <div>
        {{ $categorias->links()}}
    </div> 

@endsection