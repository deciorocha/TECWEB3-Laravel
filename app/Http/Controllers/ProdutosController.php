<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        //$produtos = Produto::all();
        $produtos = Produto::paginate();
        //$count = Produto::all()->count();
        //return view('produtos.index', ["produtos" => $produtos, "count" => $count]);
        return view('produtos.index', ["produtos" => $produtos]);
        
        //return $produtos;

    }

    public function show($nome, $quantidade, $preco)
    {
        return view('produtos.show', [
            'nome' => $nome,
            'quantidade' => $quantidade,
            'preco' => $preco
        ]);
        //return "O produto é {$nome}, quantidade é {$quantidade} e o preco é {$preco}";
    }

    public function create()
    {
        return view('produtos.create');
    }
}
