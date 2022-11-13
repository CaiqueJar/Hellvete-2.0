<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    use HasFactory;

    protected $table = "tbpedido";

    protected $fillable = [
        'idPedido',
        'idCliente',
        'idProduto'
    ];

    public $timestamps = false;
}
