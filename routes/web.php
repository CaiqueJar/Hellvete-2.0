<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaginaClienteController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('produtos', [PagesController::class, 'produtos'])->name('produtos-clientes');
Route::post('produtos', [PagesController::class, 'produtos'])->name('produtos-clientes');
Route::get('resetar', function() {
    return redirect()->route('produtos-clientes');
})->name('resetar');

Route::get('conta', [ContaController::class, 'index'])->name('conta');


Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
Route::post('/autenticar', [LoginController::class, 'autenticar'])->name('autenticar');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/registrar', [LoginController::class, 'registroPage'])->name('registroPage');
Route::post('/cadastrar', [LoginController::class, 'cadastrar'])->name('cadastrar');

Route::get('/dashboard', [LoginController::class, 'dashboardPage'])->name('dashboardPage');


Route::resource('categoria', CategoriaController::class);
Route::resource('produto', ProdutoController::class);
Route::resource('cliente', ClienteController::class);


Route::get('carrinho', [CarrinhoController::class, 'index'])->name('carrinho');
Route::post('comprar', [CarrinhoController::class, 'comprar'])->name('comprar');
Route::get('limpar-carrinho', [CarrinhoController::class, 'limpar'])->name('limpar-carrinho');

Route::post('addProdutoCarrinho/{id}', [CarrinhoController::class, 'adicionar'])->name('addProdutoCarrinho');


Route::get('deletar-conta/{id}', [ContaController::class, 'deletar'])->name('deletar-conta');

Route::get('/pdf', [ContaController::class, 'pdf'])->name('pdf');