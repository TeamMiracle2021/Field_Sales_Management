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
                    <input type="text" class="form-control" placeholder="enter route name" name="route_name" value="{{old('route_name')}}">
                    @if ($errors->has('route_name'))
                        <span class="text-danger">{{ $errors->first('route_name') }}</span>
                    @endif
                </div>
            </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label">Starting point latitude:</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="enter start point latitude" name="start_lat" value="{{old('start_lat')}}">
                @if ($errors->has('start_lat'))
                    <span class="text-danger">{{ $errors->first('start_lat') }}</span>
                @endif
                </div>
            </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label">Starting point longitude:</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="enter start point latitude" name="start_lng" value="{{old('start_lng')}}">
                @if ($errors->has('start_lng'))
                    <span class="text-danger">{{ $errors->first('start_lng') }}</span>
                @endif
                </div>
            </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label">Ending point latitude:</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="enter start point latitude" name="end_lat" value="{{old('end_lat')}}">
                @if ($errors->has('end_lat'))
                    <span class="text-danger">{{ $errors->first('end_lat') }}</span>
                @endif
                </div>
            </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label">Ending point longitude:</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="enter start point latitude" name="end_lng" value="{{old('end_lng')}}">
                @if ($errors->has('end_lng'))
                    <span class="text-danger">{{ $errors->first('end_lng') }}</span>
                @endif
                </div>
            </div>


        <div class="form-group row">
            <label class="col-md-2 col-form-label">User ID:</label>
            <div class="col-sm-10">
                <select class="form-control"  name="user_id" >
                    <option value="Select">Select</option>
                    @foreach ($users as $user)
                        <option value="{{$user->userID}}">{{$user->userID}} -  {{$user->first_name}} {{$user->last_name}}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <button  type="submit" class="btn btn-primary">save</button>
                    <a class="btn btn-primary" href="{{route('route.index')}}">cancel</a>

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

