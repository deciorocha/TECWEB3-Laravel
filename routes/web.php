<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/olaMundo', function () {
    return "Olá Mundo!!";
});

Route::get('/soma', function () {
    $x = 10;
    $y = 20;
    $total = $y+$x;
    return $total;
});

Route::get('/adicionarProduto/{id}', function ($id) {
    $texto = "o parâmetro Recebido é o ID = ".$id;
    return $texto;
});

Route::get('soma/{numeroA}/{numeroB}', function ($a, $b) {
    $soma = $a + $b;
    return $soma;
});

// Route::get('/home', HomeController::class);
// Route::get('/home-principal', [HomeController::class, 'principal']);
//
// LOGIN
//Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/login', function () {
    return view('login');
});

//
// Produtos
Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');
Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.inserir');
Route::post('/produtos/create', [ProdutosController::class, 'insert'])->name('produtos.inserir');
Route::get('/produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.ver');
// Editar
Route::get('/produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{produto}', [ProdutosController::class, 'editar'])->name('produtos.editar');
// Excluir
Route::get('/produtos/{produto}/delete', [ProdutosController::class, 'delete'])->name('produtos.delete');
Route::delete('/produtos/{produto}', [ProdutosController::class, 'deletar'])->name('produtos.deletar');


// http://localhost:8000/produtos/cal%C3%A7a/5/50

Route::get('/produtos/{nome}/{quantidade}/{preco}', 
[ProdutosController::class, 'show']);

Route::get('/teste-blade', function () {

    return view('teste', ['nome' => 'Laravel']);
    
});

//
// Categorias
Route::get('/categorias', [CategoriasController::class, 'index']);
Route::get('/categorias/create', [CategoriasController::class, 'create']);
Route::get('/categorias/show', [CategoriasController::class, 'show']);