<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use App\Models\PedidoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ContaController extends Controller
{
    public function index() {
        $login = Session::get('login');

        $cliente = ClienteModel::where('emailCliente', Session::get('login'))->first();

        $pedidos = DB::table('tbproduto')
            ->join('tbpedido', 'tbproduto.idProduto', '=', 'tbpedido.idProduto')
            ->select('tbproduto.*', 'tbpedido.*')
            ->where('tbpedido.idStatusPedido', 2)
            ->where('idCliente', $cliente->idCliente)
            ->paginate(4);

        return view('conta', compact('login', 'cliente', 'pedidos'));
    }

    public function deletar($id) {
        $cliente = ClienteModel::where('idCliente', $id)->first();

        
        $pedidos = PedidoModel::where('idCliente', $cliente->idCliente)->delete();

        $cliente = ClienteModel::where('idCliente', $id)->delete();

        Session::forget('login');
        return redirect()->route('index');
    }
}
