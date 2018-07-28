@extends('layouts.app')

@section('pageTitle', 'Statistics')

@section('metas')
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <style>
        #chartdiv {
            width: 100%;
            height: 250px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active">Statistics</li>
        </ol>
    </div><!--/.row-->
        
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Statistics Information</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <!--<div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
                </div>
            </div>
        </div>-->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <div id="daysActiveChart" style="height: 300px; width: 100%;"></div>
                    <div class="text-muted">Days Active</div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
@endsection

@section('scripts')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("daysActiveChart", {
                animationEnabled: true,
                data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##0.00\"%\"",
                    indexLabel: "{label} {y}",
                    dataPoints: [
                        {y: 79.45, label: "Google"},
                        {y: 7.31, label: "Bing"},
                        {y: 7.06, label: "Baidu"},
                        {y: 4.91, label: "Yahoo"},
                        {y: 1.26, label: "Others"}
                    ]
                }]
            });
            chart.render();
            document.querySelectorAll('.canvasjs-chart-credit').forEach(function(a) {
                a.remove()
            })
        }
    </script>
@endsection