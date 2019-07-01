@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="col-md-4" id="userPieChart" style="height: 300px"></div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Utilisateurs', 'Quantité'],
                ['Parents',     @php echo  $userCount @endphp],
                ['Enfants',     @php echo  $childCount @endphp]
            ]);

            var options = {
                title: 'Utilisateurs inscrits'
            };

            var chart = new google.visualization.PieChart(document.getElementById('userPieChart'));

            chart.draw(data, options);
        }
    </script>
@endsection
