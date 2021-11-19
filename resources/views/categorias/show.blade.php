@extends('layouts.template')

@section('titulo', 'Página Categorias - Apresentação')

@section('conteudo')
    <h1>Página Categorias - Apresentação</h1>
    
      <div class="card mt-3" style="width: 18rem;">
        <div class="card-header fw-bold text-center text-muted">
            <?= $categoria->id ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item fw-bold text-muted"><?= $categoria->nome ?></li>
        </ul>
        <a href="{{ route('categorias') }}" class="btn btn-primary"><i class="fas fa-undo"></i></a>
      </div>
@endsection