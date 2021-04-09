@extends('layouts.app')


@section('title')
    FSM | RouteEdit {{$route->route_name}}
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
                                    <h3 class="float-left"><b>Route Edit</b></h3>
                                    <a class="btn btn-primary float-right" href="{{route('route.index')}}">back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

    <form action="{{route('route.update',$route->RouteID)}}" method="POST">
        @csrf
        @method('PUT')




            <div class="form-group row">
                <label class="col-md-2 col-form-label">Route Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$route->route_name}}" placeholder="enter route name" name="route_name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label">Starting point latitude:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$route->start_lat}}" placeholder="enter start point latitude" name="start_lat">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label">Starting point longitude:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$route->start_lng}}" placeholder="enter start point latitude" name="start_lng">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label">Ending point latitude:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$route->end_lat}}" placeholder="enter start point latitude" name="end_lat">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label">Ending point longitude:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$route->end_lng}}" placeholder="enter start point latitude" name="end_lng">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-md-2 col-form-label">User ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$route->user_id}}" placeholder="enter User name" name="user_id">
                </div>
            </div>





            <div class="col-md-12">
                <div class="form-group">
                    <button  type="submit" class="btn btn-primary">submit</button>
                    <a class="btn btn-primary" href="{{route('route.index')}}">back</a>

                </div>
            </div>


    </form>
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

