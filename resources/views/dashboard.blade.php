@extends('layouts.navbar')

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src = "https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var categorias = JSON.parse('{!! json_encode($categorias) !!}');
        var produtos = JSON.parse('{!! json_encode($cont_produtos) !!}');
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

@endsection

@section('titulo', 'Dashboard')


@section('conteudo')

<div class="texto">
    <h1>Página principal</h1>
    <hr>
    <a href="{{ route('pdf') }}" class="btn btn-primary">Baixar pdf</a><br><br>

    <div class="row">
        <div class="col-6">
            <div id="piechart" style="height: 500px;"></div>

        </div>
        <div class="col-6">
        <div style=" height: 500px">
    <canvas id="myChart" class="grafico"></canvas>
    </div>
        </div>
    </div>
    
    <br>

    
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        
        var valores = JSON.parse('{!! json_encode($pedidos) !!}');
        var meses = JSON.parse('{!! json_encode($graficoMes) !!}');
        
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: meses,
                datasets: [{
                    label: 'Pedidos feitos em 6 meses',
                    data: valores,
                    borderWidth: 6,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                maintainAspectRatio: false,
            }
        });
    </script>

</div>



    
@endsection