@extends('layouts.super_admin_template')

@section('title', '4 Motion - Summary')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/summary_manager.css') }}" />
    @endsection

@section('content')

<main>
    <h1>SUMMARY</h1>
    <div class='main-screen'>
        <div class='charts-div'>
            <canvas class='chart' id="myChart"></canvas>
            <canvas class='chart' id="myChart2"></canvas>
            
        </div>
        <div class='campaign-list'>
            <ul>
                <li># of campaigns: </li>
                <li># of objectives:</li>
                <li># of actions:</li>
            </ul>
        </div>
    </div>

</main>

@endsection
@section('script')
<script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data : {
                datasets: [{
                    data: [10, 20, 30]
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'Red',
                    'Yellow',
                    'Blue'
                ]
            }
        });
        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data : {
                datasets: [{
                    data: [10, 20, 30]
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'Red',
                    'Yellow',
                    'Blue'
                ]
            }
        });
        
    </script>
@endsection