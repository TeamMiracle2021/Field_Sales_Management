@extends('layouts.app')

@section('title')
    Route | Sales Automation system
@endsection


@section('content')

{{--    <div class="form-group row">--}}
{{--        <div class="col-lg-12 margin-tb">--}}
{{--            <div class="float-right">--}}
{{--                <a class="btn btn-success"  href="{{route('route.create')}}">Create</a>--}}
{{--                <div class="container">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}







@if($msg = Session::get('add'))
    <div class="alert alert-default-primary">
        <p>{{$msg}}</p>
    </div>
@endif
{{--    <table id="#example2" class="table table-bordered table-hover">--}}
{{--        <tr>--}}
{{--            <th>Route Name</th>--}}
{{--            <th>Shop Name</th>--}}
{{--            <th>User Name</th>--}}
{{--            <th>Action</th>--}}
{{--        </tr>--}}

{{--        @foreach($route as $data)--}}
{{--        <tr>--}}
{{--            <td>{{$data->route_name}}</td>--}}
{{--            <td>{{$data->shop_ID}}</td>--}}
{{--            <td>{{$data->user_id}}</td>--}}
{{--            <td>--}}
{{--                <form action="{{route('route.destroy',$data->RouteID)}}" method="POST">--}}
{{--                    <a class="btn btn-primary" href="{{route('route.edit',$data->RouteID)}}">Edit</a>--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--    --}}{{--                    <a class="btn btn-danger" >Delete</a>--}}


{{--                    <a class="btn btn-primary" href="{{route('route.show',$data->RouteID)}}">View</a>--}}
{{--                </form>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}

    <section class="content">
        <h1><b><center>Routes</center></b></h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary"  href="{{route('route.create')}}">Create Route</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Route Name</th>
                                    <th>Shop Name</th>
                                    <th>User Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($route as $data)
                                    <tr>
                                        <td>{{$data->route_name}}</td>
                                        <td>{{$data->shop_ID}}</td>
                                        <td>{{$data->user_id}}</td>
                                        <td>
                                            <form action="{{route('route.destroy',$data->RouteID)}}" method="POST">
                                                <a class="btn btn-primary" href="{{route('route.edit',$data->RouteID)}}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                {{--                    <a class="btn btn-danger" >Delete</a>--}}


                                                <a class="btn btn-primary" href="{{route('route.show',$data->RouteID)}}">View</a>
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

{{--@section('scripts')--}}
{{--    <script>--}}
{{--         $(document).ready( function () {--}}
{{--             $('#datatable1').DataTable()};--}}

{{--    </script>--}}
{{--@endsection--}}
