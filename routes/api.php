<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('categoria', [ApiController::class, 'getCategoria']);
Route::get('categoria/{id}', [ApiController::class, 'getCategoriaById']);
Route::get('categoriabyname/{nome}', [ApiController::class, 'getCategoriaByNome']);
Route::get('total-categorias', [ApiController::class, 'getTotCategoria']);



Route::get('produto', [ApiController::class, 'getProduto']);
Route::get('produto/{id}', [ApiController::class, 'getProdutoById']);
Route::get('produtobyname/{nome}', [ApiController::class, 'getProdutoByNome']);
Route::get('total-produtos', [ApiController::class, 'getTotProduto']);