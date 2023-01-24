<?php

namespace App\Http\Controllers;

use App\Models\CategoriaModel;
use App\Models\ProdutoModel;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCategoria() {
        $categorias = CategoriaModel::all();
        return $categorias;
    }

    public function getCategoriaById($id) {
        $categorias = CategoriaModel::where("idCategoria", $id)->first();
        return $categorias;
    }

    public function getCategoriaByNome($nome) {
        $categorias = CategoriaModel::where("categoria", $nome)->first();
        return $categorias;
    }

    public function getTotCategoria() {
        $total = CategoriaModel::count();
        return $total;
    }



    public function getProduto() {
        $produtos = ProdutoModel::all();
        return $produtos;
    }

    public function getProdutoById($id) {
        $produtos = ProdutoModel::where("idProduto", $id)->first();
        return $produtos;
    }

    public function getProdutoByNome($nome) {
        $produtos = ProdutoModel::where("nomeProduto", $nome)->first();
        return $produtos;
    }

    public function getTotProduto() {
        $total = ProdutoModel::count();
        return $total;
    }
}
