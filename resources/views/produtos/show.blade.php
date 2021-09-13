@extends('layouts.template')

@section('titulo', 'Página Produtos - Apresentação')

@section('conteudo')
    <h1>Página Produtos - Apresentação</h1>
    
      <div class="card mt-3" style="width: 18rem;">
        <div class="card-header fw-bold text-center text-muted">
            <?= $produto->id ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item fw-bold text-muted"><?= $produto->nome ?></li>
          <li class="list-group-item text-muted"><?= $produto->descricao ?></li>
          <li class="list-group-item text-end text-muted"><?= $produto->valor ?></li>
        </ul>
        <a href="{{ route('produtos') }}" class="btn btn-primary"><i class="fas fa-undo"></i></a>
      </div>
@endsection