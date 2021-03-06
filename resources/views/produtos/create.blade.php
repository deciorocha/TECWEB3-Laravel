@extends('layouts.template')

@section('titulo', 'Página Produtos - Criação')

@section('conteudo')
<div class="card bg-light mb-3">
    <div class="card-body">
      <h5 class="card-title fs-2">Produtos - Cadastrar</h5>

    </div>
  </div>
    <h2></h2>
    <div class="container">
        <form method="POST" action="{{ route('produtos.inserir') }}">
            @csrf
            <div class="mb-3">
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor:</label>
               <input type="text" class="form-control" name="valor" id="valor">
              </div>
              <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
              </div>
            <a href="{{ route('produtos') }}" class="btn btn-success">Voltar</a>
            <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
          </form>
    </div>
@endsection
