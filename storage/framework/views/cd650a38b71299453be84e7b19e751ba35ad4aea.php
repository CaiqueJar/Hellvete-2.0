<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/perfil.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <h1>Perfil</h1>

    <div class="container">

        <div class="row">
            <div class="col-3">
                <div class="info">
                    <div class="perfil-image">
                        <img src="<?php echo e(asset('img/user.png')); ?>">
                    </div>
                    <div class="descricao">
                        <h5>Nome:</h5><?php echo e($cliente->nomeCliente); ?>

                        <h5>Data de nascimento:</h5><?php echo e($cliente->dtNascCliente); ?>

                        <h5>Estado civil:</h5><?php echo e($cliente->estadoCivilCliente); ?>

                        <h5>Endereço:</h5><?php echo e($cliente->enderecoCliente); ?>

                        <h5>Cpf:</h5><?php echo e($cliente->cpfCliente); ?>

                        <h5>Celular:</h5><?php echo e($cliente->celularCliente); ?>

                        <div class="d-grid gap-2">
                            <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Deletar conta</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="pedidos">
                    <div class="lista">
                        <h2>Pedidos feitos:</h2>
                        <hr>

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
                                <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row">
                                        <img src="/img/produtos/<?php echo e($pedido->fotoProduto); ?>" class="produto-img" alt="...">
                                    </th>
                                    <td><?php echo e($pedido->nomeProduto); ?></td>
                                    <td>1</td>
                                    <td><?php echo e($pedido->valorProduto); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($pedidos->links()); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar conta?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Essa ação não pode ser revertida, deseja continuar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="<?php echo e(url('deletar-conta', $cliente->idCliente)); ?>" class="btn btn-outline-danger">Deletar</a>
                </div>
            </div>
        </div>
    </div>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.clientes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/caique/Desktop/outfit-store-main/resources/views/conta.blade.php ENDPATH**/ ?>