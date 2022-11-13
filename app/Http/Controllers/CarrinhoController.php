<?php

namespace App\Http\Controllers;

use App\Models\PedidoModel;
use App\Models\ProdutoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CarrinhoController extends Controller
{
    
    private $pedidos;
    private $produtos;

    public function __construct()
    {
        $this->pedidos = new PedidoModel();
        $this->produtos = new ProdutoModel();

    }

    public function index() {
        $produtos = null;

        foreach($this->pedidos as $pedido) {
            $produtos = $this->produtos->where("idProduto", $pedido->idProduto)->get();
        }

        return view('carrinho', compact('produtos'));
    }

    public function adicionar($id) {
        $pedido = $this->pedidos->create([
            'idCliente' => Session::get('id'),
            'idProduto' => $id
        ]);

        return $pedido;
    }
}
