@extends("layouts.app")

@section("content")

{{--    <div class="form-group row">--}}
{{--        <div class="col-lg-12 margin-tb">--}}
{{--            <center><h2>Shop Activities</h2></center>--}}
{{--            <div class="float-left">--}}
{{--                    <a href="{{route('shop.create')}}">--}}
{{--                        <button type="button" class="btn btn-info btn-lg" >ADD</button>--}}
{{--                    </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


        @if($msg = Session::get("add"))
            <div class="alert alert-default-primary">
                <p>{{$msg}}</p>
            </div>
        @endif

{{--    <table class="table table-bordered">--}}
{{--        <tr>--}}
{{--            <th>Shop Name</th>--}}
{{--            <th>Owner Name</th>--}}
{{--            <th>Suburb</th>--}}
{{--            <th>City</th>--}}
{{--            <th>Action</th>--}}
{{--        </tr>--}}
{{--@foreach($Shop as $data)--}}
{{--        <tr>--}}
{{--            <td>{{$data->shop_name}}</td>--}}
{{--            <td>{{$data->owner_name}}</td>--}}
{{--            <td>{{$data->suburb}}</td>--}}
{{--            <td>{{$data->city}}</td>--}}
{{--            <td>--}}
{{--                <form action="{{route('shop.destroy',$data->ShopID)}}" method="POST">--}}
{{--                <a class="btn btn-primary" href="{{route('shop.edit',$data->ShopID)}}">Edit</a>--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                <a class="btn btn-primary" href="{{route('shop.index')}}">Delete</a>--}}
{{--                <a class="btn btn-primary" href="{{route('shop.show',$data->ShopID)}}">View</a>--}}
{{--                </form>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--@endforeach--}}
{{--    </table>--}}






    <section class="content">
        <h1><b><center>Shops</center></b></h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary"  href="{{route('shop.create')}}">Create Shop</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Shop Name</th>
                                    <th>Owner Name</th>
                                    <th>Suburb</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
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
                                </tbody>
                            </table>
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


