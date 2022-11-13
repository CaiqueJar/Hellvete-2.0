@extends('layouts.clientes')

@section('css')
<link href="{{ asset('css/carrinho.css') }}" rel="stylesheet">
@endsection

@section('conteudo')

<div class="conteudo">

    <h1>Carrinho de compras</h1>
    <hr>
    @foreach($produtos as $produto)
        $produto
    @endforeach
</div>

@endsection