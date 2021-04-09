@extends('layouts.app')

@section('title')
    FSM | RouteView of {{$route->route_name}} route
@endsection

@section('content')
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h3 class="float-left"><b>Route Details</b></h3>
                                    <a class="btn btn-primary float-right" href="{{route('route.index')}}">back</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">



                            <div class="row">
                                <div class="table table-responsive">
                                    <table class="table table-bordered" id="shopTable">

                                        <tr>
                                            <th>Route</th>
                                            <th>Details</th>
                                        </tr>

                                        <tr>
                                            <td>Route ID</td>
                                            <td> {{$route->RouteID}}</td>
                                        </tr>

                                        <tr>
                                            <td>Route Name</td>
                                            <td> {{$route->route_name}}</td>
                                        </tr>

                                        <tr>
                                            <td>Starting point latitute</td>
                                            <td>{{$route->start_lat}}</td>
                                        </tr>

                                        <tr>
                                            <td>Starting point longitude</td>
                                            <td> {{$route->start_lng}}</td>
                                        </tr>

                                        <tr>
                                            <td>End point latitude</td>
                                            <td> {{$route->end_lat}}</td>
                                        </tr>

                                        <tr>
                                            <td>End point longitude</td>
                                            <td>{{$route->end_lng}}</td>
                                        </tr>

                                        <tr>
                                            <td>User</td>
                                            <td> {{$route->user->first_name}}</td>
                                        </tr>




                                        <tr>
                                            <td>shops</td>

                                            <td>
                                        @foreach($route->shops as $shop)
                                             {{$shop->shop_name}}    ,

                                        @endforeach
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>



                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>




@endsection
