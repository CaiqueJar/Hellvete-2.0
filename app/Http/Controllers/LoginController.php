<?php

namespace App\Http\Controllers;

use App\Models\CategoriaModel;
use App\Models\ClienteModel;
use App\Models\PedidoModel;
use App\Models\ProdutoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
   
    public function loginPage() {
        return view('login');
    }

    public function dashboardPage() {
        $login = Session::get('login');
        if(!$login) {
            return redirect('/');
        }
        
        $cont_produtos = array();

        $categorias = CategoriaModel::all();
        $produtos = ProdutoModel::all();
        $pedidos = $this->getGraphPedidosValor();

        $graficoMes = $this->getGraphRestaurantesMes();

        foreach($categorias as $categoria) {
            $quantidade = $produtos->where('idCategoria', $categoria->idCategoria)->count();
            array_push($cont_produtos, $quantidade);
        }


        return view('dashboard', compact('categorias', 'cont_produtos', 'pedidos', 'graficoMes'));
    }

    public function autenticar(Request $request) {
        $login = $request->login;
        $senha = $request->senha;
        
        if($login == 'admin' && $senha == "123") {
            Session::put('login', $login);
            return redirect()->route('dashboardPage');
        }

        $cliente = ClienteModel::where('emailCliente', $login)->first();
        if($cliente && Hash::check($senha, $cliente->senhaCliente)) {
            Session::put('login', $login);
            Session::put('id', $cliente->idCliente);
            return redirect()->route('index');
        }


        return redirect()->back()->withErrors("Login ou senha incorretos!");
    }

    public function index() {
        $login = Session::get('login');
        if(!$login) {
            return redirect('/');
        }
        return view('index');

    }

    public function cadastrar(Request $request) {
        $clientes = new ClienteModel();

        $senha = Hash::make($request->senha);

        $clientes->create([
            'nomeCliente' => $request->nome,
            'senhaCliente' => $senha,
            'dtNascCliente' => $request->data,
            'estadoCivilCliente' => $request->civil,
            'cepCliente' => $request->cep,
            'enderecoCliente' => $request->endereco,
            'numeroCliente' => $request->numero,
            'cidadeCliente' => $request->cidade,
            'estadoCliente' => $request->estado,
            'rgCliente' => $request->rg,
            'cpfCliente' => $request->cpf,
            'emailCliente' => $request->email,
            'foneCliente' => $request->telefone,
            'celularCliente' => $request->celular,
        ]);

        return redirect()->back();
    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }

    public function registroPage() {
        return view('registro');
    }

    public function getGraphRestaurantesMes() {
        $mesAtual = date('m');

        if(($mesAtual - 6) < 0)
        {
            $aux = 12 - (6 - $mesAtual);
        }
        else{
            $aux = $mesAtual - 6;
        }

        $resultado = [];
        $meses = ['Janeiro','Fevereiro', 'Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
        
        while($aux != $mesAtual){

            array_push($resultado, $meses[$aux]);

            if($aux == 11) $aux = 0;
            else $aux++;
        }

        return $resultado;
    }

    public function getGraphPedidosValor() {
        $mesAtual = date('m');

        if(($mesAtual - 6) < 0)
        {
            $aux = 12 - (6 - $mesAtual);
        }
        else{
            $aux = $mesAtual - 6;
        }
        $resultado = [];
        
        while($aux <= $mesAtual){
            array_push($resultado,  $this->getPedidospMes($aux + 1));
            $aux++;
        }

        return $resultado;
    }

    private function getPedidospMes($mes)
    {
        $query = DB::table('tbpedido')
            ->select(DB::raw('COUNT(idPedido) AS total'))
            ->where(DB::raw('MONTH(dataPedido)'), '=', $mes)
            ->where('idStatusPedido', '=', "2")
            ->first()->total;

            return $query;
    }
}
