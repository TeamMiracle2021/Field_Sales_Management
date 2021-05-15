@extends('layouts.app')


@section('title')
    FSM | Dashboard
    @endsection



@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">

<br>

{{--        <div class="callout ">--}}
{{--            <h4><center>Welcome !!!!</center></h4>--}}
{{--            <h5><center><b>----- Field Sales Management System ----</b></center></h5>--}}
{{--        </div>--}}

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Users</h3>
                        <h5>Total: <b>{{$usercount}}</b></h5>

                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->



            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Products</h3>
                        <h5>Total: <b>{{$productcount}}</b></h5>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <a href="/product" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->




            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Shops</h3>
                        <h5>Total: <b>{{$shopscount}}</b></h5>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="/shop" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->



            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-gradient-indigo">
                    <div class="inner">
                        <h3>Routes</h3>
                        <h5>Total: <b>{{$routecount}}</b></h5>
                    </div>
                    <div class="icon">
                        <i class="fas fa-route"></i>
                    </div>
                    <a href="/route" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>


            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

    <br>
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 col-6 ">

                {{--graph--}}
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sales Chart</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block;" width="530" height="312" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                {{--graph end--}}

            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5">



{{--                <!-- Calendar -->--}}
                <div class="card bg-gradient-success">
                    <div class="card-header border-0">

                        <h3 class="card-title">
                            <i class="far fa-calendar-alt"></i>
                            Calendar
                        </h3>
                        <!-- tools card -->
                        <div class="card-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-bars"></i></button>
                                <div class="dropdown-menu float-right" role="menu">
                                    <a href="#" class="dropdown-item">Add new event</a>
                                    <a href="#" class="dropdown-item">Clear events</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">View calendar</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pt-0">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%"></div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- Map card -->
                <div class="card bg-gradient-primary">
                    <div class="card-header border-0">
                    {{--                        <h3 class="card-title">--}}
                    {{--                            <i class="fas fa-map-marker-alt mr-1"></i>--}}
                    {{--                            Visitors--}}
                    {{--                        </h3>--}}
                    <!-- card tools -->
                    {{--                        <div class="card-tools">--}}
                    {{--                            <button type="button"--}}
                    {{--                                    class="btn btn-primary btn-sm daterange"--}}
                    {{--                                    data-toggle="tooltip"--}}
                    {{--                                    title="Date range">--}}
                    {{--                                <i class="far fa-calendar-alt"></i>--}}
                    {{--                            </button>--}}
                    {{--                            <button type="button"--}}
                    {{--                                    class="btn btn-primary btn-sm"--}}
                    {{--                                    data-card-widget="collapse"--}}
                    {{--                                    data-toggle="tooltip"--}}
                    {{--                                    title="Collapse">--}}
                    {{--                                <i class="fas fa-minus"></i>--}}
                    {{--                            </button>--}}
                    {{--                        </div>--}}
                    <!-- /.card-tools -->
                    </div>
                {{--                    <div class="card-body">--}}
                {{--                        <div id="world-map" style="height: 250px; width: 100%;"></div>--}}
                {{--                    </div>--}}
                <!-- /.card-body-->
                    <div class="card-footer bg-transparent">
                        <div class="row">
                            <div class="col-4 text-center">
                                <div id="sparkline-1"></div>
                                {{--                                <div class="text-white">Visitors</div>--}}
                            </div>
                            <!-- ./col -->
                            <div class="col-4 text-center">
                                <div id="sparkline-2"></div>
                                {{--                                <div class="text-white">Online</div>--}}
                            </div>
                            <!-- ./col -->
                            <div class="col-4 text-center">
                                <div id="sparkline-3"></div>
                                {{--                                <div class="text-white">Sales</div>--}}
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.Mapcard -->



{{--                pie--}}
{{--                <div class="card card-danger">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">Pie Chart</h3>--}}

{{--                        <div class="card-tools">--}}
{{--                            <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
{{--                                <i class="fas fa-minus"></i>--}}
{{--                            </button>--}}
{{--                            <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
{{--                                <i class="fas fa-times"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>--}}
{{--                        <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 424px;" width="530" height="312" class="chartjs-render-monitor"></canvas>--}}
{{--                    </div>--}}
{{--                    <!-- /.card-body -->--}}
{{--                </div>--}}
{{--                pie end--}}


{{--                donut--}}
{{--                <div class="card card-danger">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">Donut Chart</h3>--}}

{{--                        <div class="card-tools">--}}
{{--                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>--}}
{{--                            </button>--}}
{{--                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>--}}
{{--                        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 424px;" width="530" height="312" class="chartjs-render-monitor"></canvas>--}}
{{--                    </div>--}}
{{--                    <!-- /.card-body -->--}}
{{--                </div>--}}
{{--                donut end--}}




            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->





@endsection

@section('jscript')
    <script>
        $(function () {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //--------------
            //- AREA CHART -
            //--------------

            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

            var areaChartData = {
                labels  : [
                    @foreach($graph as $data)
                    '{{$data->placed_date}}',
                    @endforeach
                ],
                datasets: [
                    {
                        label               : 'Total Sales',
                        backgroundColor     : 'rgba(60,141,188,0.9)',
                        borderColor         : 'rgba(60,141,188,0.8)',
                        pointRadius          : false,
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : [
                            @foreach($graph as $data)
                            {{$data->totalValue}},
                        @endforeach
                        ]
                    },
                    // {
                    //     label               : 'Electronics',
                    //     backgroundColor     : 'rgba(210, 214, 222, 1)',
                    //     borderColor         : 'rgba(210, 214, 222, 1)',
                    //     pointRadius         : false,
                    //     pointColor          : 'rgba(210, 214, 222, 1)',
                    //     pointStrokeColor    : '#c1c7d1',
                    //     pointHighlightFill  : '#fff',
                    //     pointHighlightStroke: 'rgba(220,220,220,1)',
                    //     data                : [65, 59, 80, 81, 56, 55, 40]
                    // },
                ]
            }

            var areaChartOptions = {
                maintainAspectRatio : false,
                responsive : true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines : {
                            display : false,
                        }
                    }],
                    yAxes: [{
                        gridLines : {
                            display : false,
                        }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            var areaChart       = new Chart(areaChartCanvas, {
                type: 'line',
                data: areaChartData,
                options: areaChartOptions
            })

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
            var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
            var lineChartData = jQuery.extend(true, {}, areaChartData)
            lineChartData.datasets[0].fill = false;
            lineChartData.datasets[1].fill = false;
            lineChartOptions.datasetFill = false

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: lineChartData,
                options: lineChartOptions
            })

            //-------------
            //- DONUT CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
            var donutData        = {
                labels: [
                    'Chrome',
                    'IE',
                    'FireFox',
                    'Safari',
                    'Opera',
                    'Navigator',
                ],
                datasets: [
                    {
                        data: [700,500,400,600,300,100],
                        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                    }
                ]
            }
            var donutOptions     = {
                maintainAspectRatio : false,
                responsive : true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var donutChart = new Chart(donutChartCanvas, {
                type: 'doughnut',
                data: donutData,
                options: donutOptions
            })

            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
            var pieData        = donutData;
            var pieOptions     = {
                maintainAspectRatio : false,
                responsive : true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var pieChart = new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            })

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = jQuery.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            var temp1 = areaChartData.datasets[1]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
                responsive              : true,
                maintainAspectRatio     : false,
                datasetFill             : false
            }

            var barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })

            //---------------------
            //- STACKED BAR CHART -
            //---------------------
            var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
            var stackedBarChartData = jQuery.extend(true, {}, barChartData)

            var stackedBarChartOptions = {
                responsive              : true,
                maintainAspectRatio     : false,
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }
            }

            var stackedBarChart = new Chart(stackedBarChartCanvas, {
                type: 'bar',
                data: stackedBarChartData,
                options: stackedBarChartOptions
            })
        })
    </script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

    @endsection


