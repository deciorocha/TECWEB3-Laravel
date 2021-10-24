@extends('layouts.template')
@section('titulo', 'Produtos - Deletar')
@section('conteudo')
<div class="container">
    
    <div class="card bg-light mb-3">
        <div class="card-body">
            <h5 class="card-title fs-2">Produtos - Editar</h5>
        </div>
    </div>

    <form action="{{route('produtos.editar', $produto)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$produto->nome}}">
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control" id="valor" name="valor" value="{{$produto->valor}}">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" rows="3">{{$produto->descricao}}</textarea>
        </div>
        <a href="{{ route('produtos') }}" class="btn btn-success">Voltar</a>
        <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
    </form>
</div>
    
@endsection