@extends('layouts.template')

@section('titulo', 'Página Produtos - Listagens')

@section('conteudo')
<div class="card bg-light mb-3">
    <div class="card-body">
      <h5 class="card-title fs-2">Produtos - Listagens</h5>
      <a href="create" class="btn btn-success">Cadastrar</a>
    </div>
  </div>
    <h2></h2>
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