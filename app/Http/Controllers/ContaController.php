<?php

namespace App\Http\Controllers;

use App\Models\CategoriaModel;
use App\Models\ClienteModel;
use App\Models\PedidoModel;
use App\Models\ProdutoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use PDF;

class ContaController extends Controller
{
    public function index() {
        $login = Session::get('login');
        if($login == "admin") {
            return redirect()->route('dashboardPage');
        }

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

    public function pdf() {
        // retreive all records from db
      $produtos = ProdutoModel::all();
      $categorias = CategoriaModel::all();

      $pdf = PDF::loadView('produtos-pdf', compact('produtos', 'categorias'));
      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
    }

    
}
