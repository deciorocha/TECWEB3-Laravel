@extends('layouts.template')
@section('titulo', 'Categorias - Deletar')
@section('conteudo')
<div class="container">
    
    <div class="card bg-light mb-3">
        <div class="card-body">
            <h5 class="card-title fs-2">Categorias - Editar</h5>
        </div>
    </div>

    <form action="{{route('categorias.editar', $categoria)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$categoria->nome}}">
        </div>
        <a href="{{ route('categorias') }}" class="btn btn-success">Voltar</a>
        <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
    </form>
</div>
    
@endsection