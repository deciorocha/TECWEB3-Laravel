<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::paginate();
        return view('categorias.index', ["categorias" => $categorias]);
    }

    public function show($id )
    {
        $categoria = Categoria::find($id);
        return view('categorias.show', [ 'categoria' => $categoria]);
    }

    public function create()
    {
        return view('categorias.create');
    }
    
    public function insert(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nome = $request->nome;

        $categoria->save();

        $mensagem = "Registro ({$categoria->nome}) Cadastrado com Sucesso!";

        return redirect()->route('categorias')->with('success', $mensagem);
    }

    public function edit(Categoria $categoria) {
        return view('categorias.edit', ['categoria' => $categoria]);
    }

    public function editar(Request $request, Categoria $categoria) {
        $categoria->nome = $request->nome;

        $categoria->save();

        $mensagem = "O Registro ({$categoria->id} - {$categoria->nome}) foi Alterado com sucesso!!!";

        return redirect()->route('categorias')->with('info', $mensagem);

        // Outra forma de usar flash message
        // $request->session()->flash('success', $mensagem);
        // return redirect()->route('categorias');
    }

    public function delete(Categoria $categoria) {
        return view('categorias.delete', ['categoria' => $categoria]);
    }

    public function deletar(Categoria $categoria) {
        $mensagem = "O Registro ({$categoria->id} - {$categoria->nome}) foi Excluído com sucesso!!!";
        $categoria->delete();
        return redirect()->route('categorias')->with('success', $mensagem);

    }


}
