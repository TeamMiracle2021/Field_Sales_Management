@extends('layouts.app')

@section('content')

    <div class="form-group row">
        <div class="col-lg-12 margin-tb">
            <div class="float-right">Edit new record</div>
            <div class="float-right">

            </div>
        </div>
    </div>

    <form action="{{route('route.update',$route->RouteID)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Route Name: </label>
                    <input type="text" class="form-control" value="{{$route->route_name}}"  placeholder="enter route name" name="route_name">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Shop Name: </label>
                    <input type="text" class="form-control" value="{{$route->shop_ID}}" placeholder="enter shop name" name="shop_ID">
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <label>Shop Name: </label>
                    <input type="text" class="form-control" value="{{$route->user_id}}" placeholder="enter User name" name="user_id">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <button  type="submit" class="btn btn-primary">submit</button>
                    <a class="btn btn-primary" href="{{route('route.index')}}">back</a>

                </div>
            </div>

        </div>
    </form>



@endsection

