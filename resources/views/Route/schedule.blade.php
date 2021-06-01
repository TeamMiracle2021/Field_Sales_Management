@extends('layouts.app')

@section('title')
    FSM | Route Schedules
@endsection

@section('content')
    @if($msg = Session::get('add'))
        <div class="alert alert-default-primary">
            <p>{{$msg}}</p>
        </div>
    @endif

    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">




                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($start != null)
                                    <h3 class="float-left  text-primary"><b>Current Schedules For "{{$route->route_name}}" Route</b></h3>
                                        @else
                                        <h3 class="text-danger"><b>No Shedules For This route</b></h3>
                                    @endif
                                    {{--                                    <a class="btn btn-primary float-right" style="margin: 5px" href="{{route('route.index')}}">Back</a>--}}
                                    {{--                                    <a class="btn btn-primary float-right" style="margin: 5px" href="{{route('route.getlatlng')}}" target="_blank">Get lat,lng From map</a>--}}

                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route('route.deleteSchedule',$route->RouteID)}}" method="POST">
                                @csrf

                                @if ($start != null)

                                    <div class="text-md-center">
                                        <div class="col-sm-10">
{{--                                            <div class="card-body table-responsive align-items-center">--}}
                                            <center>
                                            <table class="justify-content-xl-center"  style="font-size: 25px">
                                                <tr >
                                                    <td class="font-weight-bold">From :</td>
                                                    <td>{{$start}}</td>
                                                </tr>

                                                <tr>
                                                    <td class="font-weight-bold">To :</td>
                                                    <td>{{$end}}</td>
                                                </tr>

                                                <tr>
                                                    <td class="font-weight-bold">Day :</td>
                                                    <td>{{$day}}</td>
                                                </tr>

                                                <tr>
                                                    <td class="font-weight-bold">Duration :</td>
                                                    <td> {{$due}}</td>
                                                </tr>

                                            </table></center>
                                            <br>



                     <table class="table table-bordered" style="font-size: 25px">
                                <tr>
                                    <td colspan="2" class="font-weight-bold" >Shedules Dates</td>
                                </tr>
                                @foreach($shedules as $data)
                                    <tr>
                                        <td colspan="2" >{{$data->date_of_Shedule}}</td>
                                    </tr>
                                @endforeach
                            </table>
                                            </div>



{{--                                            <h5><b>From : </b>{{$start}}</h5>--}}
{{--                                            <h5><b>To : </b>{{$end}}</h5>--}}
{{--                                            <h5><b>In : </b>Every {{$day}}</h5>--}}
{{--                                            <h5><b>Again : </b> {{$due}}</h5>--}}
{{--                                            <h5><b>Following days : </b></h5>--}}
{{--                                            @foreach($shedules as $data)--}}
{{--                                                <h6>{{$data->date_of_Shedule}}</h6>--}}
{{--                                            @endforeach--}}
                                        </div>
                                    </div>




                                <div class="col-md-12">
                                    <div class="form-group text-right">
                                        <button  type="submit" style="margin: 5px" class="btn btn-primary">Delete</button>
{{--                                        <a class="btn btn-secondary" style="margin: 5px" href="{{route('route.deleteSchedule',[$route->RouteID])}}">Delete And Create</a>--}}
                                        <a class="btn btn-secondary" style="margin: 5px" href="{{route('route.index')}}">Cancel</a>@endif
                                    </div>
                                </div>
                        </div>


                        </form>
                    </div>













     @if ($start == null)


                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="float-left"><b>Create New Shedule </b></h3>

                                    {{--                                    <a class="btn btn-primary float-right" style="margin: 5px" href="{{route('route.index')}}">Back</a>--}}
                                    {{--                                    <a class="btn btn-primary float-right" style="margin: 5px" href="{{route('route.getlatlng')}}" target="_blank">Get lat,lng From map</a>--}}

                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route('route.saveSchedule',$route->RouteID)}}" method="POST">
                                @csrf


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Route Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="route_name" value="{{$route->route_name}}" readonly>
                                        @if ($errors->has('route_name'))
                                            <span class="text-danger">{{ $errors->first('route_name') }}</span>
                                        @endif
                                    </div>
                                </div>


{{--                                <input type="text" class="form-control" name="r_id" value="{{$route->RouteID}}">--}}

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Due Dates:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="due_dates" value="{{$route->due_dates}}" readonly>
                                        @if ($errors->has('due_dates'))
                                            <span class="text-danger">{{ $errors->first('due_dates') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Sales Representative:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="user" value="{{$route->user->first_name}} {{$route->user->last_name}}" readonly>

{{--                                        @if ($errors->has('user_id'))--}}
{{--                                            <span class="text-danger">{{ $errors->first('user_id') }}</span>--}}
{{--                                        @endif--}}
                                    </div>
                                </div>

<hr style="height:2px;border-width:0;color:gray;background-color:black">

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Select The first Date:</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control"  name="first_date">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">For :</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="noOfMonths" >
                                            <option value="30">01 Month</option>
                                            <option value="60">02 Month</option>
                                            <option value="90">03 Month</option>
                                            <option value="120">04 Month</option>
                                            <option value="150">05 Month</option>
                                            <option value="180">06 Month</option>
                                        </select>
                                    </div>
                                </div>



                                    <div class="col-md-12">
                                        <div class="form-group text-right">
                                            <button  type="submit" style="margin: 5px" class="btn btn-primary">Save Shedule</button>
                                            <a class="btn btn-secondary" style="margin: 5px" href="{{route('route.index')}}">Cancel</a>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>

                @endif



                </div>
            </div>
        </div>
    </section>
@endsection

