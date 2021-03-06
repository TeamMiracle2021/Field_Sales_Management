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

                                    <a class="btn btn-primary float-right" style="margin: 5px" href="{{route('route.index')}}">back</a>
                                    <a class="btn btn-primary float-right" style="margin: 5px" href="{{route('shop.editshoplocation')}}" target="_blank">Get lat,lng From map</a>
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
                                        <input type="text" class="form-control" value="{{$route->route_name}}" placeholder="enter route name" name="route_name" value="{{old('route_name')}}">
                                        @if ($errors->has('route_name'))
                                            <span class="text-danger">{{ $errors->first('route_name') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Starting point latitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$route->start_lat}}" placeholder="enter start point latitude" name="start_lat" value="{{old('start_lat')}}">
                                        @if ($errors->has('start_lat'))
                                            <span class="text-danger">{{ $errors->first('start_lat') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Starting point longitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$route->start_lng}}" placeholder="enter start point latitude" name="start_lng" value="{{old('start_lng')}}">
                                        @if ($errors->has('start_lng'))
                                            <span class="text-danger">{{ $errors->first('start_lng') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Ending point latitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$route->end_lat}}" placeholder="enter start point latitude" name="end_lat" value="{{old('end_lat')}}">
                                        @if ($errors->has('end_lat'))
                                            <span class="text-danger">{{ $errors->first('end_lat') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Ending point longitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$route->end_lng}}" placeholder="enter start point latitude" name="end_lng" value="{{old('end_lng')}}">
                                        @if ($errors->has('end_lng'))
                                            <span class="text-danger">{{ $errors->first('end_lng') }}</span>
                                        @endif
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Assign To:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="user_id" >
                                            <option value="{{$route->user_id}}">{{$route->user_id}} - {{$route->user->first_name}} {{$route->user->last_name}}</option>
                                            @foreach ($users as $user)
                                                <option value="{{$user->userID}}">{{$user->userID}} -  {{$user->first_name}} {{$user->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Due Dates:</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="due_dates" id="flexRadioDefault1" value="7" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                7 Days
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="due_dates" id="flexRadioDefault2" value="14" >
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                14 Days
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="due_dates" id="flexRadioDefault3" value="21" >
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                21 Days
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="due_dates" id="flexRadioDefault4" value="28" >
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                28 Days
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button  type="submit" class="btn btn-primary">save</button>
                                        <a class="btn btn-secondary" href="{{route('route.index')}}">Cancel</a>

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

