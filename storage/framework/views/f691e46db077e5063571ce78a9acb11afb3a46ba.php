<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">nome do produto</th>
      <th scope="col">valor do produto</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($produto->nomeProduto); ?></th>
            <td><?php echo e($produto->valorProduto); ?></td>
            <td><?php echo e($categorias->where('idCategoria', $produto->idCategoria)->first()->categoria); ?></td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</body>
</html><?php /**PATH C:\Users\Admin\Downloads\outfit-store-main\resources\views/produtos-pdf.blade.php ENDPATH**/ ?>