@extends("layouts.app")

@section("content")
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h3 class="float-left"><b>Shop Edit</b></h3>
                                    <a class="btn btn-primary float-right" style="margin: 5px" href="{{route('vehicle.index')}}">back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <form action="{{route('vehicle.update',$vehicle->vehicle_ID)}}" method="POST">
                                @csrf
                                @method('PUT')



                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Vehicle No:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$vehicle->vehicle_no}}" placeholder="Enter vehicle Number" name="vehicle_no" value="{{old('vehicle_no')}}">
                                        @if ($errors->has('vehicle_no'))
                                            <span class="text-danger">{{ $errors->first('vehicle_no') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Capacity:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$vehicle->capacity}}" placeholder="Enter Capacity" name="capacity" value="{{old('capacity')}}">
                                        @if ($errors->has('capacity'))
                                            <span class="text-danger">{{ $errors->first('capacity')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" >Other Description:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$vehicle->description}}" placeholder="Enter description" name="description" value="{{old('description')}}">
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Sales representative:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="user_id" >
                                            <option value="{{$user[0]->userID}}">{{$user[0]->first_name}} {{$user[0]->middle_name}} {{$user[0]->last_name}}</option>
                                            @foreach ($user as $route)
                                                <option value="{{$route->userID}}">  {{$route->first_name}} {{$route->middle_name}} {{$route->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>




                                <div class="text-right">
                                    <button type="submit"  Value="Save" class="btn btn-primary">Save</button>
                                    <a class="btn btn-secondary" href="{{route('vehicle.index')}}">Cancel</a>
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
