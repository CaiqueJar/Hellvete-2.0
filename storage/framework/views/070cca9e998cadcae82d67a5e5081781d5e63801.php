<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $__env->yieldContent('titulo'); ?></title>

        <!-- Links -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="<?php echo e(asset('css/clientes.css')); ?>" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" href="<?php echo e(asset('img/icon.png')); ?>">
        <?php echo $__env->yieldContent('css'); ?>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
                    Hell
                    <img src="<?php echo e(asset('img/icon.png')); ?>" alt="Bootstrap" width="35" height="35">
                    vete
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?php echo e(route('produtos-clientes')); ?>"><i class='bx bx-purchase-tag'></i>&nbspProdutos</a>
                    <a class="nav-link" href="<?php echo e(route('carrinho')); ?>"><i class='bx bxs-cart'></i>&nbspCarrinho</a>
                </div>
                </div>
                <ul class="navbar-nav ms-auto">
                    <?php if($login): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('conta')); ?>">
                            <img src="<?php echo e(asset('img/user.png')); ?>" width="30" height="30">
                            Conta
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('logout')); ?>">Sair</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Entre</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
       <?php echo $__env->yieldContent('conteudo'); ?>

        <footer class="bg-light text-center text-lg-start">
          
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark">Caique e Guilherme</a>
        </div>
        <!-- Copyright -->
        </footer>
    </body>
</html><?php /**PATH C:\Users\Caique\Desktop\outfit-store-main\resources\views/layouts/clientes.blade.php ENDPATH**/ ?>