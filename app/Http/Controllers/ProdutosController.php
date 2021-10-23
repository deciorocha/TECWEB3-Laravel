<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        //$produtos = Produto::all();
        // $produtos = Produto::paginate();
        // $produtos = Produto::orderBy('id', 'desc')->paginate();
        $produtos = Produto::orderBy('nome', 'asc')->paginate();
        //$count = Produto::all()->count();
        //return view('produtos.index', ["produtos" => $produtos, "count" => $count]);
        return view('produtos.index', ["produtos" => $produtos]);
        
        //return $produtos;

    }

  /*  public function show($nome, $quantidade, $preco)
    {
        return view('produtos.show', [
            'nome' => $nome,
            'quantidade' => $quantidade,
            'preco' => $preco
        ]);
        //return "O produto é {$nome}, quantidade é {$quantidade} e o preco é {$preco}";
    } */

    public function show($id)
    {
        $produto = Produto::find($id);
        return view('produtos.show', [ 'produto' => $produto]);
    } 

    public function create()
    {
        return view('produtos.create');
    }

    public function insert(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;
        $produto->save();

        $mensagem = "Registro ({$produto->nome}) Cadastrado com Sucesso!";

        return redirect()->route('produtos')->with('success', $mensagem);
    }

    public function edit(Produto $produto) {
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function editar(Request $request, Produto $produto) {
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;
        $produto->save();

        $mensagem = "O Registro ({$produto->id} - {$produto->nome}) foi Alterado com sucesso!!!";

        return redirect()->route('produtos')->with('info', $mensagem);

        // Outra forma de usar flash message
        // $request->session()->flash('success', $mensagem);
        // return redirect()->route('produtos');
    }

    public function delete(Produto $produto) {
        return view('produtos.delete', ['produto' => $produto]);
    }

    public function deletar(Produto $produto) {
        $mensagem = "O Registro ({$produto->id} - {$produto->nome}) foi Excluído com sucesso!!!";
        $produto->delete();
        return redirect()->route('produtos')->with('success', $mensagem);

    }


}
