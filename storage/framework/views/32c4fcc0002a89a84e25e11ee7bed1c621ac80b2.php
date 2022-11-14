

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/carrinho.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="conteudo">

    <?php if(\Session::has('success')): ?>
    <div class="alert alert-success" role="alert">
        Compra realizada com sucesso!
    </div>
    <?php endif; ?>

    <h1>Carrinho de compras</h1>
    <hr>
    
    <form action="<?php echo e(route('comprar')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3">
                <a href="<?php echo e(route('limpar-carrinho')); ?>" type="button" class="btn btn-danger">Limpar carrinho</a>
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
                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row">
                        <img src="/img/produtos/<?php echo e($produto->fotoProduto); ?>" class="produto-img" alt="...">
                    </th>
                    <td><?php echo e($produto->nomeProduto); ?></td>
                    <td>1</td>
                    <td><?php echo e($produto->valorProduto); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.clientes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/caique/Desktop/outfit-store-main/resources/views/carrinho.blade.php ENDPATH**/ ?>