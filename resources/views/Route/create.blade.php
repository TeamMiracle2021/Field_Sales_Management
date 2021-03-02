@extends('Route.layout')

@section('content')

    <div class="form-group row">
        <div class="col-lg-12 margin-tb">
            <div class="float-right">Add new record</div>
            <div class="float-right">

            </div>
        </div>
    </div>

    <form action="{{route('route.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Route Name: </label>
                    <input type="text" class="form-control" placeholder="enter route name" name="route_name">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Shop Name: </label>
                    <input type="text" class="form-control" placeholder="enter shop name" name="shop_name">
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

