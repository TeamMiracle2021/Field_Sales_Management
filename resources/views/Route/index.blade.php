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


{{--                            <div class="row no-print">--}}
{{--                                <div class="col-12">--}}
{{--                                    <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


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

                                                <a class="btn btn-primary" href="{{route('route.edit',$data->RouteID)}}">Edit</a>
                                                <button type="button" data-toggle="modal" class="btn btn-danger" data-target="#exampleModal" >Delete</button>
                                                <a class="btn btn-primary" href="{{route('route.show',$data->RouteID)}}">View</a>
{{--                                            <a class="btn btn-primary" href="{{route('route.show2', $data->RouteID)}}">View om Map</a>--}}

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel" style="color:#233554">Delete Alert</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="color:#233554">
                                            You are going to delete a route. Do you want to continue ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            <form action="{{route('route.destroy',$data->RouteID)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit"  class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>


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
        </div>

    </section>



@endsection


