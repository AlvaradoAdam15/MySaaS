@extends('layouts.app')

@section('htmlheader_title')
    Daily Sales Report
@endsection

@section('customs_scripts')
     <!-- Data Table -->
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dailySales').dataTable();
        } );

        var ctx = document.getElementById("barChartDailySales").getContext("2d");
        var data = {
            labels: ["Day1", "Day2", "Day3", "Day3", "Day4", "Day5"],
            datasets: [{
                label: "Daily Sales",
                data: [950, 1589, 1589, 2500, 3400, 456],
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)"

            }]
        }
        var myBarChart = new Chart(ctx).Bar(data);

    </script>
@endsection
@section('customs-css')
     <!-- Data Table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
@end

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-xs-10">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daily Sales Report</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table id="dailySales" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <thbody>
                                <tr>
                                    <td>Day 1</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Day 2</td>
                                    <td>11</td>
                                </tr>
                            </thbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Bar Chart</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas id="barChartDailySales" style="height: 226px; width: 508px;" width="508" height="226"></canvas>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
