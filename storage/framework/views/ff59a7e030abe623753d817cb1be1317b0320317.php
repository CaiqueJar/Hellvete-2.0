

<?php $__env->startSection('js'); ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var camisetas = JSON.parse('<?php echo json_encode($camisetas); ?>');
        var calcas = JSON.parse('<?php echo json_encode($calcas); ?>');
        var bermudas = JSON.parse('<?php echo json_encode($bermudas); ?>');

        var categorias = JSON.parse('<?php echo json_encode($categorias); ?>');

        var produtos = JSON.parse('<?php echo json_encode($cont_produtos); ?>');

        var data = new google.visualization.DataTable();
        
        data.addColumn('string', 'Task');
        data.addColumn('number', 'Hours per Day');

        for(var i = 0; i < produtos.length; i++) {
            data.addRows([
            [categorias[i].categoria, produtos[i]]
        ]);
        }


        var options = {
            title: 'Produtos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo', 'Dashboard'); ?>


<?php $__env->startSection('conteudo'); ?>

<div class="texto">
    <h1>Página principal</h1>

    <div id="piechart" style="width: 900px; height: 500px;"></div>

</div>



    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/caique/Desktop/outfit-store-main/resources/views/dashboard.blade.php ENDPATH**/ ?>