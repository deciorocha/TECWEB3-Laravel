@extends('layouts.template')

@section('titulo', 'Página Categorias - Listagens')

@section('conteudo')

<div class="card bg-light mb-3">
    <div class="card-body">
      <h5 class="card-title fs-2">Categorias - Listagens</h5>
      <a href="{{ route('categorias.inserir') }}" class="btn btn-success">Cadastrar</a>
    </div>
  </div>
    <h2></h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><button>ID</button></th>
                <th>NOME</th>

                <th>VER</th>
            </tr>
        </thead>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nome }}</td>
                <td>
                    <a href="{{route('categorias.ver', $categoria->id)}}">
                        <button type="button" class="btn btn-primary btn-sm">
                            <i class="far fa-eye"></i>
                        </button>
                    </a>
                    <a href="{{route('categorias.edit', $categoria)}}">
                        <button type="button" class="btn btn-warning btn-sm">
                            <i class="far fa-edit"></i>
                        </button>
                    </a>
                    <a href="{{route('categorias.delete', $categoria->id)}}">
                        <button type="button" class="btn btn-danger btn-sm">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </a>
                </td>

            </tr>
        @endforeach
    </table>
    <div>
        {{ $categorias->links()}}
    </div> 

@endsection