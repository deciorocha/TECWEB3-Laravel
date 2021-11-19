@extends('layouts.template')
@section('titulo', 'Categorias - Deletar')
@section('conteudo')
<div class="container">
    <div class="card bg-light mb-3">
        <div class="card-body">
            <h5 class="card-title fs-2">Categorias - Excluir</h5>
        </div>
    </div>

    <form action="{{route('categorias.deletar', $categoria)}}" method="post">
        @csrf
        @method('DELETE')
        <div class="mb-3">
            <label for="nome" class="form-label">
                Deseja excluir o categoria <b>{{$categoria->nome}}</b>?
            </label>
            
        </div>
        <a href="{{ route('categorias') }}" class="btn btn-success">Voltar</a>
        <button type="submit" name="excluir" class="btn btn-primary">Excluir</button>
    </form>
</div>
    
@endsection
