@extends('layouts.clientes')

@section('css')
<link href="{{ asset('css/carrinho.css') }}" rel="stylesheet">
@endsection

@section('conteudo')

<div class="conteudo">

    @if(\Session::has('success'))
    <div class="alert alert-success" role="alert">
        Compra realizada com sucesso!
    </div>
    @endif

    <h1>Carrinho de compras</h1>
    <hr>
    
    <form action="{{ route('comprar') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3">
                <a href="{{ route('limpar-carrinho') }}" type="button" class="btn btn-danger">Limpar carrinho</a>
                <input type="submit" class="btn btn-success" value="Finalizar compra">
            </div>
        </div>
    
        
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <th scope="row">
                        <img src="/img/produtos/{{ $produto->fotoProduto }}" class="produto-img" alt="...">
                    </th>
                    <td>{{ $produto->nomeProduto }}</td>
                    <td>1</td>
                    <td>{{ $produto->valorProduto }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>

@endsection