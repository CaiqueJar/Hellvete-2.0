@extends('layouts.clientes')

@section('css')
<link href="{{ asset('css/produtos.css') }}" rel="stylesheet">
@endsection

@section('conteudo')

<div class="container-flex">
    <div class="row">
        <div class="col-sm-3">
            <div class="sidebarzinha">
                <form method="post" action="{{ route('produtos-clientes') }}">
                @csrf
                <div class="coisas">
                    <label class="form-label">Pesquisar: </label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="texto" placeholder="Ex: calça " aria-label="default input example">
                    </div>

                    <label class="form-label">Categorias: </label>
                    @foreach ($categorias as $categoria)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="{{ $categoria->idCategoria }}" name="flexRadioDefault" id="flexRadioDefault{{ $categoria->idCategoria }}">
                        <label class="form-check-label" for="flexRadioDefault{{ $categoria->idCategoria }}">
                            {{ $categoria->categoria }}
                        </label> 
                    </div>
                    @endforeach
                </div>
                
                <div class="d-grid gap-2 col-12 mt-auto">
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </div>
                <br>
                
                </form>
                <div class="d-grid gap-2 col-12 mt-auto">
                    <a href="{{ route('resetar') }}" class="btn btn-danger" type="submit">Resetar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="conteudo">
                <h1>Produtos</h1>
                <hr>
                
                <div class="scrolar">
                    <div class="row">
                        @foreach ($produtos as $produto)
    
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="/img/produtos/{{ $produto->fotoProduto }}" class="card-img-top" alt="...">
                                <hr>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $produto->nomeProduto  }}</h5>
                                    <p class="card-text">
                                        R$ {{ $produto->valorProduto }}<br>
                                        Categoria: {{ $categorias->where('idCategoria', $produto->idCategoria)->first()->categoria }}
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar{{ $produto->idProduto }}">Comprar</button>
                                </div>
                            </div>
                        </div>
                        {{-- Modal para adicionar no carinnho o produtoas --}}
                        <div class="modal fade" id="comprar{{ $produto->idProduto }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form method="POST" action="{{ url('addProdutoCarrinho/'.$produto->idProduto) }}">
                                @csrf
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header modal-custom">
                                        <h5 class="modal-title modal-custom" id="exampleModalLabel">Adicionar produto {{ $produto->nomeProduto }} ao carrinho?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body modal-custom">
                                        Será adicionado esse produto no carrinho de compras. Prosseguir?
                                    </div>
                                    <div class="modal-footer modal-custom">
                                        <button type="button" class="btn btn-secondary btn btn-custom-excluir" data-bs-dismiss="modal">Fechar</button>
                                        <input type="submit" class="btn btn-outline-success" value="Comprar">
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection