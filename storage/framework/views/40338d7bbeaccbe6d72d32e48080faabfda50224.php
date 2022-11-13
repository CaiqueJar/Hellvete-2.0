

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/index.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo e(asset('img/carousel-images/burzum-self-titled.png')); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo e(asset('img/carousel-images/darkthrone-transilvanian-hunger.png')); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo e(asset('img/carousel-images/mayhem-de-mysteris.png')); ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
<br><br>
<div class="centralizado">
    <h3>Mais vistos:</h3>
    <div id="carouselcard" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="cards-wrapper">
                    <div class="card">
                        <img src="/img/produtos/bathory-return.jpg" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Teste</h5>
                            <p class="card-text">
                                R$ 2<br>
                                Categoria: suco de maracuja
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">Comprar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/img/produtos/emperor-ep.jpg" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Teste</h5>
                            <p class="card-text">
                                R$ 2<br>
                                Categoria: suco de maracuja
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">Comprar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/img/produtos/black-sabbath.jpg" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Teste</h5>
                            <p class="card-text">
                                R$ 2<br>
                                Categoria: suco de maracuja
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card">
                        <img src="/img/produtos/slayer.jpg" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Malandro</h5>
                            <p class="card-text">
                                R$ 2<br>
                                Categoria: Maradona
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">Comprar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/img/produtos/sarcofago.jpg" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Malandro</h5>
                            <p class="card-text">
                                R$ 2<br>
                                Categoria: Maradona
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">Comprar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/img/produtos/venom-hell.jpg" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Malandro</h5>
                            <p class="card-text">
                                R$ 2<br>
                                Categoria: Maradona
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card">
                        <img src="/img/produtos/motorhead.jpg" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Teste</h5>
                            <p class="card-text">
                                R$ 2<br>
                                Categoria: suco de maracuja
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">Comprar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/img/produtos/metallica.jpg" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Teste</h5>
                            <p class="card-text">
                                R$ 2<br>
                                Categoria: suco de maracuja
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">Comprar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/img/produtos/sod-english.jpeg" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Teste</h5>
                            <p class="card-text">
                                R$ 2<br>
                                Categoria: suco de maracuja
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselcard" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselcard" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.clientes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/caique/Desktop/outfit-store-main/resources/views/index.blade.php ENDPATH**/ ?>