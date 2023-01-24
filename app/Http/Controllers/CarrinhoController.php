<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use App\Models\PedidoModel;
use App\Models\ProdutoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
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
        $login = Session::get('login');
        if(!$login) {
            return redirect()->route('login');
        }

        $cliente = ClienteModel::where('emailCliente', $login)->first();

        $produtos = DB::table('tbproduto')
            ->join('tbpedido', 'tbproduto.idProduto', '=', 'tbpedido.idProduto')
            ->select('tbproduto.*', 'tbpedido.*')
            ->where('tbpedido.idStatusPedido', 1)
            ->where('idCliente', $cliente->idCliente)
            ->get();


        return view('carrinho', compact('login', 'produtos'));
    }

    public function adicionar($id) {
        $login = Session::get('login');
        if(!$login) {
            return redirect()->route('login')->withErrors('Precisa estar logado para comprar');
        }


        $pedido = $this->pedidos->create([
            'idCliente' => Session::get('id'),
            'idProduto' => $id,
            'idStatusPedido' => 1,
            'dataPedido' => Date::now()
        ]);

        if($pedido) {
            return redirect()->route('carrinho');

        }
        return redirect()->back()->withErrors("deu ruim");
    }

    public function comprar(Request $request) {
        $login = Session::get('login');
        if(!$login) {
            return redirect()->route('login')->withErrors('Precisa estar logado para comprar');
        }


        $cliente = ClienteModel::where('emailCliente', $login)->first();

        $pedidos = PedidoModel::where('idCliente', $cliente->idCliente)
                    ->where('idStatusPedido', 1)
                    ->get();

        $atualizado = '';

        foreach($pedidos as $pedido) {
            $atualizado = PedidoModel::where('idPedido', $pedido->idPedido)->update([
                'idStatusPedido' => 2
            ]);
        }

        if($atualizado == '') {
            return redirect()->back();
        }

        return redirect()->back()->with('success', 'Deu boa');   
    }

    public function limpar() {
        $login = Session::get('login');
        if(!$login) {
            return redirect()->route('login')->withErrors('Precisa estar logado para comprar');
        }

        $cliente = ClienteModel::where('emailCliente', $login)->first();

        $pedidos = PedidoModel::where('idCliente', $cliente->idCliente)
                    ->where('idStatusPedido', 1)
                    ->delete();

        return redirect()->back();
    }
}
