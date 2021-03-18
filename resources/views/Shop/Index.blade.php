@extends("Shop.layout")

@section("content")

    <div class="form-group row">
        <div class="col-lg-12 margin-tb">

            <center><h2>Shop Activities</h2></center>
            <div class="float-left">
                    <a href="{{route('shop.create')}}">
                        <button type="button" class="btn btn-info btn-lg" >ADD</button>
                    </a>
            </div>


{{--                <div class="container-fluid">--}}
{{--                    <form class="d-flex" type='get' action="{{url('/search')}}">--}}
{{--                        <input class="form-control me-2" name='query' type="search" placeholder="Search" aria-label="Search">--}}
{{--                        <button class="btn btn-outline-success" type="submit">Search</button>--}}

{{--                    </form>--}}
{{--                </div>--}}


        </div>
    </div>


        @if($msg = Session::get("add"))
            <div class="alert alert-success">
                <p>{{$msg}}</p>
            </div>
        @endif

    <table class="table table-bordered">
        <tr>
            <th>Shop Name</th>
            <th>Owner Name</th>
            <th>Suburb</th>
            <th>City</th>
            <th>Action</th>
        </tr>
@foreach($Shop as $data)
        <tr>
            <td>{{$data->shop_name}}</td>
            <td>{{$data->owner_name}}</td>
            <td>{{$data->suburb}}</td>
            <td>{{$data->city}}</td>
            <td>
                <form action="{{route('shop.destroy',$data->ShopID)}}" method="POST">
                <a class="btn btn-primary" href="{{route('shop.edit',$data->ShopID)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
{{--                <a class="btn btn-primary" href="{{route('shop.index')}}">Delete</a>--}}
                <a class="btn btn-primary" href="{{route('shop.show',$data->ShopID)}}">View</a>
                </form>
            </td>
        </tr>
@endforeach
    </table>

@endsection


