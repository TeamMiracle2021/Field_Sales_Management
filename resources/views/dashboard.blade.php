@extends('layouts.app')


@section('title')
    FSM | Dashboard
    @endsection


@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">

<br>

        <div class="callout ">
            <h4><center>Welcome !!!!</center></h4>
            <h5><center><b>----- Field Sales Management System ----</b></center></h5>
        </div>

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Users</h3>
                        <p>Details of the users</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->



            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Products</h3>

                        <p>Details of the products</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <a href="/product" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->







{{--            <div class="card bg-gradient-success">--}}
{{--                <div class="card-header border-0">--}}

{{--                    <h3 class="card-title">--}}
{{--                        <i class="far fa-calendar-alt"></i>--}}
{{--                        Calendar--}}
{{--                    </h3>--}}
{{--                    <!-- tools card -->--}}
{{--                    <div class="card-tools">--}}
{{--                        <!-- button with a dropdown -->--}}
{{--                        <div class="btn-group">--}}
{{--                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">--}}
{{--                                <i class="fas fa-bars"></i></button>--}}
{{--                            <div class="dropdown-menu float-right" role="menu">--}}
{{--                                <a href="#" class="dropdown-item">Add new event</a>--}}
{{--                                <a href="#" class="dropdown-item">Clear events</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a href="#" class="dropdown-item">View calendar</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">--}}
{{--                            <i class="fas fa-minus"></i>--}}
{{--                        </button>--}}
{{--                        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">--}}
{{--                            <i class="fas fa-times"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <!-- /. tools -->--}}
{{--                </div>--}}
{{--                <!-- /.card-header -->--}}
{{--                <div class="card-body pt-0">--}}
{{--                    <!--The calendar -->--}}
{{--                    <div id="calendar" style="width: 100%"></div>--}}
{{--                </div>--}}
{{--            </div>--}}






            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Shops</h3>

                        <p>Details of shops</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="/shop" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->



            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-gradient-indigo">
                    <div class="inner">
                        <h3>Routes</h3>

                        <p>Details of routes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-route"></i>
                    </div>
                    <a href="/route" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-gradient-maroon">
                    <div class="inner">
                        <h3>Reports</h3>

                        <p>Details of reports</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <a href="/report" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">



            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">




            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
