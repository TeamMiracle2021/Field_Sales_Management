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

{{--                                    <a class="btn btn-primary float-right" style="margin: 5px" href="{{route('route.index')}}">Back</a>--}}
{{--                                    <a class="btn btn-primary float-right" style="margin: 5px" href="{{route('route.getlatlng')}}" target="_blank">Get lat,lng From map</a>--}}

                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route('route.step1Store')}}" method="POST">
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


{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-md-2 col-form-label">Due Dates:</label>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <input type="text" class="form-control" placeholder="enter due dates" name="due_dates" value="{{old('due_dates')}}">--}}
{{--                                        @if ($errors->has('due_dates'))--}}
{{--                                            <span class="text-danger">{{ $errors->first('due_dates') }}</span>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Assign To:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="user_id">
                                            <option value="0">Select User</option>
                                            @foreach ($reps as $user)
                                                <option value="{{$user->userID}}">{{$user->userID}} -  {{$user->first_name}} {{$user->last_name}}</option>
                                            @endforeach

                                        </select>
                                        @if ($errors->has('user_id'))
                                            <span class="text-danger">{{ $errors->first('user_id') }}</span>
                                        @endif
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




                                <div class="text-right"><h6>Click "Next" to select start and end points from the map</h6>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button  type="submit" style="margin: 5px" class="btn btn-primary">Next</button>
                                        <a class="btn btn-secondary" style="margin: 5px" href="{{route('route.index')}}">Cancel</a>
                                    </div>
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

