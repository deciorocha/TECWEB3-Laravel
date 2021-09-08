@extends('layouts.template')

@section('titulo', 'Página Produtos - Apresentação')

@section('conteudo')
    <h1>Página Produtos - Apresentação</h1>

    O produto é <?= $nome ?>, quantidade é <?= $quantidade ?> 
    e o preco é <?= $preco ?>
@endsection