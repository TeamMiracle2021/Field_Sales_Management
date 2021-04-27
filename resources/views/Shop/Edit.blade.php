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
                                    <a class="btn btn-primary float-right" href="{{route('shop.index')}}">back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <form action="{{route('shop.update',$shop->ShopID)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')



                                {{--            <div class="form-group row">--}}
                                {{--                <label class="col-md-2 col-form-label">Shop Name:</label>--}}
                                {{--                <div class="col-sm-10">--}}
                                {{--                    <input type="text" class="form-control" placeholder="Enter shop name" name="shop_name" required>--}}
                                {{--                </div>--}}
                                {{--            </div>--}}




                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Shop Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$shop->shop_name}}" placeholder="Enter shop name" name="shop_name" value="{{old('shop_name')}}">
                                        @if ($errors->has('shop_name'))
                                            <span class="text-danger">{{ $errors->first('shop_name') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Owner Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$shop->owner_name}}" placeholder="Enter owner name" name="owner_name" value="{{old('owner_name')}}">
                                        @if ($errors->has('owner_name'))
                                            <span class="text-danger">{{ $errors->first('owner_name') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Owner NIC:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$shop->owner_NIC}}" placeholder="Enter owner NIC" name="owner_NIC" value="{{old('owner_NIC')}}">
                                        @if ($errors->has('owner_NIC'))
                                            <span class="text-danger">{{ $errors->first('owner_NIC') }}</span>
                                        @endif

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Latitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$shop->lat}}" placeholder="Enter latitude of shop" name="lat" value="{{old('lat')}}">
                                        @if ($errors->has('lat'))
                                            <span class="text-danger">{{ $errors->first('lat') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Longitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$shop->lng}}" placeholder="Enter longitude of shop" name="lng" value="{{old('lng')}}">
                                        @if ($errors->has('lng'))
                                            <span class="text-danger">{{ $errors->first('lng') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" >Image:</label>
                                    <div class="col-sm-10">
                                        <input type="file"  class="form-control" name="avatar" value="{{old('avatar')}}">
                                        @if ($errors->has('avatar'))
                                            <span class="text-danger">{{ $errors->first('avatar') }}</span>
                                        @endif

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Address No:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$shop->address_no}}" placeholder="Enter address No." name="address_no" value="{{old('address_no')}}">
                                        @if ($errors->has('address_no'))
                                            <span class="text-danger">{{ $errors->first('address_no') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Suburb:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$shop->suburb}}" placeholder="Enter suburb" name="suburb" value="{{old('suburb')}}">
                                        @if ($errors->has('suburb'))
                                            <span class="text-danger">{{ $errors->first('suburb') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">City:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$shop->city}}" placeholder="Enter city" name="city" value="{{old('city')}}">
                                        @if ($errors->has('city'))
                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Province:</label>
                                    <div class="col-sm-10">
                                        <select  name="province" >
                                            <option value="Select">Select</option>
                                            <option value="Central Province">Central Province</option>
                                            <option value="Eastern Province">Eastern Province</option>
                                            <option value="North Central Province">North Central Province</option>
                                            <option value="Northern Province">Northern Province</option>
                                            <option value="North Western Province">North Western Province</option>
                                            <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                                            <option value="Southern Province">Southern Province</option>
                                            <option value="Uva Province">Uva Province</option>
                                            <option value="Western Province">Western Province</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Country:</label>
                                    <div class="col-sm-10">
                                        <select  name="country" >
                                            <option value="Select">Select</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Telephone Number:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$shop->telephone_numbers}}" placeholder="Telephone Number" name="telephone_numbers" value="{{old('telephone_numbers')}}">
                                        @if ($errors->has('telephone_numbers'))
                                            <span class="text-danger">{{ $errors->first('telephone_numbers') }}</span>
                                        @endif
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Register Date:</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" value="{{$shop->registered_date}}" placeholder="Register Date" name="registered_date">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Due Date:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$shop->due_dates}}" placeholder="Enter due Date" name="due_dates">
                                    </div>
                                </div>


                                <div class ="form-group row">
                                    <label class="col-md-2 col-form-label">Assign To:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="user_id" >
                                            <option value="Select">Select User</option>
                                            @foreach ($users as $user)
                                                <option value="{{$user->userID}}">{{$user->userID}} -  {{$user->first_name}} {{$user->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Route:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="RouteID" >
                                            <option value="Select">Select Route</option>
                                            @foreach ($routes as $route)
                                                <option value="{{$route->RouteID}}"> {{$route->RouteID}} - {{$route->route_name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>


                                <div class="text-right">
                                    <button type="submit"  Value="Save" class="btn btn-primary">Save</button>
                                    <a class="btn btn-secondary" href="{{route('shop.index')}}">Cancel</a>
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
