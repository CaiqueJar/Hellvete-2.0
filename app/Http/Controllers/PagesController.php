<?php

namespace App\Http\Controllers;

use App\Models\CategoriaModel;
use App\Models\ProdutoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index() {
        $login = Session::get('login');

        return view('index', compact('login'));
    }

    public function produtos(Request $request) {
        $login = Session::get('login');

        $produtos = ProdutoModel::all();
        $categorias = CategoriaModel::all();

        $texto = $request->texto;
        $radio = $request->flexRadioDefault;

        if(!empty($texto)) {
            if(isset($radio)) {
                $produtos = ProdutoModel::where('nomeProduto','LIKE', '%'.$texto.'%')->where('idCategoria', $radio)->get();
            }
            else {
                $produtos = ProdutoModel::where('nomeProduto','LIKE', '%'.$texto.'%')->get();
            }
        }
        else if(isset($radio)) {
            $produtos = ProdutoModel::where('idCategoria', $radio)->get();
        }

        return view('produtos-clientes', compact('login', 'produtos', 'categorias'));
    }
}
