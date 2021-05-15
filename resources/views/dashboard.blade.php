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
                        <h3 class="card-title">Area Chart</h3>

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



{{--                calendar--}}
                <div class="card bg-gradient-success">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

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
                        <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">May 2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="04/25/2021" class="day old weekend">25</td><td data-action="selectDay" data-day="04/26/2021" class="day old">26</td><td data-action="selectDay" data-day="04/27/2021" class="day old">27</td><td data-action="selectDay" data-day="04/28/2021" class="day old">28</td><td data-action="selectDay" data-day="04/29/2021" class="day old">29</td><td data-action="selectDay" data-day="04/30/2021" class="day old">30</td><td data-action="selectDay" data-day="05/01/2021" class="day weekend">1</td></tr><tr><td data-action="selectDay" data-day="05/02/2021" class="day weekend">2</td><td data-action="selectDay" data-day="05/03/2021" class="day">3</td><td data-action="selectDay" data-day="05/04/2021" class="day">4</td><td data-action="selectDay" data-day="05/05/2021" class="day">5</td><td data-action="selectDay" data-day="05/06/2021" class="day">6</td><td data-action="selectDay" data-day="05/07/2021" class="day">7</td><td data-action="selectDay" data-day="05/08/2021" class="day weekend">8</td></tr><tr><td data-action="selectDay" data-day="05/09/2021" class="day weekend">9</td><td data-action="selectDay" data-day="05/10/2021" class="day">10</td><td data-action="selectDay" data-day="05/11/2021" class="day">11</td><td data-action="selectDay" data-day="05/12/2021" class="day">12</td><td data-action="selectDay" data-day="05/13/2021" class="day">13</td><td data-action="selectDay" data-day="05/14/2021" class="day active today">14</td><td data-action="selectDay" data-day="05/15/2021" class="day weekend">15</td></tr><tr><td data-action="selectDay" data-day="05/16/2021" class="day weekend">16</td><td data-action="selectDay" data-day="05/17/2021" class="day">17</td><td data-action="selectDay" data-day="05/18/2021" class="day">18</td><td data-action="selectDay" data-day="05/19/2021" class="day">19</td><td data-action="selectDay" data-day="05/20/2021" class="day">20</td><td data-action="selectDay" data-day="05/21/2021" class="day">21</td><td data-action="selectDay" data-day="05/22/2021" class="day weekend">22</td></tr><tr><td data-action="selectDay" data-day="05/23/2021" class="day weekend">23</td><td data-action="selectDay" data-day="05/24/2021" class="day">24</td><td data-action="selectDay" data-day="05/25/2021" class="day">25</td><td data-action="selectDay" data-day="05/26/2021" class="day">26</td><td data-action="selectDay" data-day="05/27/2021" class="day">27</td><td data-action="selectDay" data-day="05/28/2021" class="day">28</td><td data-action="selectDay" data-day="05/29/2021" class="day weekend">29</td></tr><tr><td data-action="selectDay" data-day="05/30/2021" class="day weekend">30</td><td data-action="selectDay" data-day="05/31/2021" class="day">31</td><td data-action="selectDay" data-day="06/01/2021" class="day new">1</td><td data-action="selectDay" data-day="06/02/2021" class="day new">2</td><td data-action="selectDay" data-day="06/03/2021" class="day new">3</td><td data-action="selectDay" data-day="06/04/2021" class="day new">4</td><td data-action="selectDay" data-day="06/05/2021" class="day new weekend">5</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month active">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year active">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
                    </div>
                    <!-- /.card-body -->
                </div>

{{--                calendar end--}}





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
                labels  : ['Sunday', 'Monday', 'Tuesday', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label               : 'Digital Goods',
                        backgroundColor     : 'rgba(60,141,188,0.9)',
                        borderColor         : 'rgba(60,141,188,0.8)',
                        pointRadius          : false,
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : [65, 59, 80, 81, 56, 55, 40]
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
{{--    <!-- jQuery -->--}}
{{--    <script src="plugins/jquery/jquery.min.js"></script>--}}
{{--    <!-- jQuery UI 1.11.4 -->--}}
{{--    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>--}}
{{--    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->--}}
{{--    <script>--}}
{{--        $.widget.bridge('uibutton', $.ui.button)--}}
{{--    </script>--}}
{{--    <!-- Bootstrap 4 -->--}}
{{--    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--    <!-- ChartJS -->--}}
{{--    <script src="plugins/chart.js/Chart.min.js"></script>--}}
{{--    <!-- Sparkline -->--}}
{{--    <script src="plugins/sparklines/sparkline.js"></script>--}}
{{--    <!-- JQVMap -->--}}
{{--    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>--}}
{{--    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>--}}
{{--    <!-- jQuery Knob Chart -->--}}
{{--    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>--}}
{{--    <!-- daterangepicker -->--}}
{{--    <script src="plugins/moment/moment.min.js"></script>--}}
{{--    <script src="plugins/daterangepicker/daterangepicker.js"></script>--}}
{{--    <!-- Tempusdominus Bootstrap 4 -->--}}
{{--    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>--}}
{{--    <!-- Summernote -->--}}
{{--    <script src="plugins/summernote/summernote-bs4.min.js"></script>--}}
{{--    <!-- overlayScrollbars -->--}}
{{--    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>--}}
{{--    <!-- AdminLTE App -->--}}
{{--    <script src="dist/js/adminlte.js"></script>--}}
{{--    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->--}}
{{--    <script src="dist/js/pages/dashboard.js"></script>--}}
{{--    <!-- AdminLTE for demo purposes -->--}}
{{--    <script src="dist/js/demo.js"></script>--}}

    @endsection


