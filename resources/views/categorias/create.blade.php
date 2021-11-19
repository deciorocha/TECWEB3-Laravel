@extends('layouts.template')

@section('titulo', 'Página Categorias - Criação')

@section('conteudo')
<div class="card bg-light mb-3">
    <div class="card-body">
      <h5 class="card-title fs-2">Categorias - Cadastrar</h5>

    </div>
  </div>
    <h2></h2>
    <div class="container">
        <form method="POST" action="{{ route('categorias.inserir') }}">
            @csrf
            <div class="mb-3">
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <a href="{{ route('categorias') }}" class="btn btn-success">Voltar</a>
            <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
          </form>
    </div>
@endsection
