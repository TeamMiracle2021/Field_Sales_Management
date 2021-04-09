@extends('layouts.app')

@section('title')
    FSM | RouteAdd
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
                                <div class="col-md-12">
                                    <h3 class="float-left"><b>Add Route</b></h3>

                                    <a class="btn btn-secondary float-left" href="{{route('route.getlatlng')}}" target="_blank">Get lat,lng From map</a>
                                        <a class="btn btn-primary float-right" href="{{route('route.index')}}">Back</a>

                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
    <form action="{{route('route.store')}}" method="POST">
        @csrf


            <div class="form-group row">
                <label class="col-md-2 col-form-label">Route Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="enter route name" name="route_name">
                </div>
            </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label">Starting point latitude:</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="enter start point latitude" name="start_lat">
                </div>
            </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label">Starting point longitude:</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="enter start point latitude" name="start_lng">
                </div>
            </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label">Ending point latitude:</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="enter start point latitude" name="end_lat">
                </div>
            </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label">Ending point longitude:</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="enter start point latitude" name="end_lng">
                </div>
            </div>


        <div class="form-group row">
            <label class="col-md-2 col-form-label">User ID:</label>
            <div class="col-sm-10">
                <select class="form-control"  name="user_id" >
                    @foreach ($users as $user)
                        <option value="{{$user->userID}}">{{$user->userID}} -  {{$user->first_name}} {{$user->last_name}}</option>
                    @endforeach
                </select>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

