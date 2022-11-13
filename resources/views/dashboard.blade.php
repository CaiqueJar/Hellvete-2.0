@extends('layouts.navbar')

@section('js')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var camisetas = JSON.parse('{!! json_encode($camisetas) !!}');
        var calcas = JSON.parse('{!! json_encode($calcas) !!}');
        var bermudas = JSON.parse('{!! json_encode($bermudas) !!}');

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Camisetas',     camisetas],
            ['Calça',      calcas],
            ['Bermudas',  bermudas],
        ]);

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

    <div id="piechart" style="width: 900px; height: 500px;"></div>

</div>



    
@endsection