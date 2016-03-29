@extends('layouts.app')

@section('htmlheader_title')
    Daily Sales Report
@endsection

@section('customs_scripts')
     <!-- Data Table -->
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#dailySales').dataTable();
        } );
    </script>
@endsection
@section('customs_css')
     <!-- Data Table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" />
@endsection

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
                                @foreach($totals as $index => $total)
                                    <tr>
                                        <td> {{$days[$index]}}</td>
                                        <td> {{$total}}</td>
                                    </tr>
                                @endforeach
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
                            <graph></graph>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
