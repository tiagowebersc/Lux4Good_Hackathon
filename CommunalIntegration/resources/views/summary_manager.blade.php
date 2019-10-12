@extends('layouts.super_admin_template')

@section('title', '4 Motion - Summary')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/summary_manager.css') }}" />
    @endsection

@section('content')

<main>
    <?php
        $valueGender = '';
        foreach ($queryGender as $value) {
            if (!empty($valueGender)) {
                $valueGender .= ",";
            }
            $valueGender .= $value->total;
        }
        $valueAge = '';
        foreach ($queryAge as $value) {
            if (!empty($valueAge)) {
                $valueAge .= ",";
            }
            $valueAge .= $value->total;
        }
    ?>
    {{$valueGender}}
    <h1>SUMMARY</h1>
    
    <div class='main-screen'>
        <div class='charts-div'>
            <div class='chart'><h5>Gender</h5><canvas  id="myChart"></canvas></div>
            <div class='chart'><h5>Age</h5><canvas  id="myChart2"></canvas></div>
            
        </div>
        <div class='campaign-list'>
            <ul>
                <li># of campaigns: 3</li>
                <li># of objectives: 15</li>
                <li># of actions: 43</li>
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
                    data: [{{$valueGender}}],
            backgroundColor: ["#ff6cf3","#0074D9"]
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [<?php
                foreach ($queryGender as $key => $value) {
                    if ($key > 0) {
                        echo ",";
                    } ?>      
                    '{{$value->gender}}'
                    <?php
                }
            ?>]
            }
        });
        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data : {
                datasets: [{
                    data: [{{$valueAge}}],
            backgroundColor: ["#0074D9", "#FF4136", "#2ECC40", "#FF851B"]
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [<?php
                foreach ($queryAge as $key => $value) {
                    if ($key > 0) {
                        echo ",";
                    } ?>      
                    '{{$value->age}}'
                    <?php
                }
            ?>]
            }
        });
        
    </script>
@endsection