@extends('layouts.template')
@section('titulo', 'Produtos - Deletar')
@section('conteudo')
<div class="container">
    <div class="card bg-light mb-3">
        <div class="card-body">
            <h5 class="card-title fs-2">Produtos - Excluir</h5>
        </div>
    </div>

    <form action="{{route('produtos.deletar', $produto)}}" method="post">
        @csrf
        @method('DELETE')
        <div class="mb-3">
            <label for="nome" class="form-label">
                Deseja excluir o produto <b>{{$produto->nome}}</b>?
            </label>
            
        </div>
        <a href="{{ route('produtos') }}" class="btn btn-success">Voltar</a>
        <button type="submit" name="excluir" class="btn btn-primary">Excluir</button>
    </form>
</div>
    
@endsection
