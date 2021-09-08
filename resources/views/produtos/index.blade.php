@extends('layouts.template')

@section('titulo', 'Página Produtos - Listagens')

@section('conteudo')
<div class="card bg-light mb-3">
    <div class="card-body">
      <h5 class="card-title fs-2">Produtos - Listagens</h5>
      <a href="{{ route('produtos.inserir') }}" class="btn btn-success">Cadastrar</a>
    </div>
  </div>
    <h2></h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>DESCRIÇÃO</th>
                <th>VALOR</th>
                <th>STATUS</th>
                <th>VER</th>
            </tr>
        </thead>
        @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->valor }}</td>
                <td><input type="checkbox" name="status" value="1"></td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">
                        <i class="far fa-eye"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
    <div>
        {{ $produtos->links()}}
    </div> 
    

@endsection