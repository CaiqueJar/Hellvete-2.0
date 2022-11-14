<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
    <?php echo $__env->yieldContent('css'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="<?php echo e(asset('css/modal.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href=<?php echo e(asset('css/menu.css')); ?>>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    
    <?php echo $__env->yieldContent('js'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    

</head>
<body>
    

    <div class="sidebar close">
        <div class="logo-details">
            <img src="<?php echo e(asset('img/icon.png')); ?>" class="logo-image">
            <h1 class="logo-name">Hellvete</h1>
        </div>
        <ul class="nav-links">
            <li>
                <a href="<?php echo e(route('categoria.index')); ?>">
                    <i class='bx bxs-spreadsheet' ></i>
                    <span class="link_name">Categoria</span>
                </a>

            </li>
            <li>
                <a href="<?php echo e(route('produto.index')); ?>">
                    <i class='bx bxs-package'></i>
                    <span class="link_name">Produtos</span>
                </a>

            </li>
            <li>
                <a href="#">
                    <i class='bx bx-briefcase'></i>
                    <span class="link_name">Pedidos</span>
                </a>

            </li>
            <li>
                <a href="<?php echo e(route('cliente.index')); ?> ">
                    <i class='bx bx-group'></i>
                    <span class="link_name">Clientes</span>
                </a>

            </li>
            <li>
                <a class="logout" href="<?php echo e(route('logout')); ?>">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">Sair</span>
                </a>

            </li>
        </ul>
    </div>
    <section class="home-section">

        <div class="home-content">
            <i class="bx bx-menu"></i>
        </div>
        <div class="col-11 m-auto">
            <?php echo $__env->yieldContent('conteudo'); ?>
        </div>

    </section>

    


    <script>
        let btn = document.querySelector(".bx-menu");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector("bx-search");
        btn.addEventListener("click", ()=>{
            sidebar.classList.toggle("close");
        });
        
    </script>


</body>
</html><?php /**PATH /home/caique/Desktop/outfit-store-main/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>