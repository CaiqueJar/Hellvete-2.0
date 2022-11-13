<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContaController extends Controller
{
    public function index() {
        $cliente = ClienteModel::where('emailCliente', Session::get('login'))->first();
        return view('conta', compact('cliente'));
    }
}
