

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/produtos.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="container-flex">
    <div class="row">
        <div class="col-sm-3">
            <div class="sidebarzinha">
                <form method="post" action="<?php echo e(route('produtos-clientes')); ?>">
                <?php echo csrf_field(); ?>
                <div class="coisas">
                    <label class="form-label">Pesquisar: </label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="texto" placeholder="Ex: calça " aria-label="default input example">
                    </div>

                    <label class="form-label">Categorias: </label>
                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="<?php echo e($categoria->idCategoria); ?>" name="flexRadioDefault" id="flexRadioDefault<?php echo e($categoria->idCategoria); ?>">
                        <label class="form-check-label" for="flexRadioDefault<?php echo e($categoria->idCategoria); ?>">
                            <?php echo e($categoria->categoria); ?>

                        </label> 
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
                <div class="d-grid gap-2 col-12 mt-auto">
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </div>
                <br>
                
                </form>
                <div class="d-grid gap-2 col-12 mt-auto">
                    <a href="<?php echo e(route('resetar')); ?>" class="btn btn-danger" type="submit">Resetar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="conteudo">
                <h1>Produtos</h1>
                <hr>
                
                <div class="scrolar">
                    <div class="row">
                        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="/img/produtos/<?php echo e($produto->fotoProduto); ?>" class="card-img-top" alt="...">
                                <hr>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($produto->nomeProduto); ?></h5>
                                    <p class="card-text">
                                        R$ <?php echo e($produto->valorProduto); ?><br>
                                        Categoria: <?php echo e($categorias->where('idCategoria', $produto->idCategoria)->first()->categoria); ?>

                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar<?php echo e($produto->idProduto); ?>">Comprar</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal fade" id="comprar<?php echo e($produto->idProduto); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form method="POST" action="<?php echo e(url('addProdutoCarrinho/'.$produto->idProduto)); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header modal-custom">
                                        <h5 class="modal-title modal-custom" id="exampleModalLabel">Adicionar produto <?php echo e($produto->nomeProduto); ?> ao carrinho?</h5>
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

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.clientes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Caique\Desktop\outfit-store-main\resources\views/produtos-clientes.blade.php ENDPATH**/ ?>