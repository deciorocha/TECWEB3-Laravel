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

    public function show($nome )
    {
        return view('categorias.show', [
            'nome' => $nome
        ]);
    }

    public function create()
    {
        return view('categorias.create');
    }
}
