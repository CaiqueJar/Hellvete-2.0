<?php

namespace App\Http\Controllers;

use App\Models\CategoriaModel;
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
}
