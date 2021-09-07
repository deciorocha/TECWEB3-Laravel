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

Route::get('/home', HomeController::class);
Route::get('/home-principal', [HomeController::class, 'principal']);
//
// Produtos
Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/produtos/create', [ProdutosController::class, 'create']);
Route::get('/produtos/show', [ProdutosController::class, 'show']);

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