@extends("layouts.app")

@section("content")



@section('title')
    Vehicles | FSM
@endsection

        @if($msg = Session::get("add"))
            <div class="alert alert-default-primary">
                <p>{{$msg}}</p>
            </div>
        @endif


    <section class="content">
        <h1><b><center>Vehicles</center></b></h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" style="margin: 5px"  href="{{route('vehicle.create')}}">Add Vehicle</a>


{{--                            <a class="btn btn-primary" style="margin: 5px"  href="{{route('vehicle.jquery')}}">jquery</a>--}}


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" >

                                <thead>
                                <tr>
                                    <th><center>Vehicle No</center></th>
                                    <th><center>Load Capacity</center></th>
                                    <th><center>Actions</center></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vehicle as $data)
                                    <tr>
                                        <td><center>{{$data->vehicle_no}}</center></td>
                                        <td><center>{{$data->capacity}}</center></td>


                                        <td><center>
                                            <form action="{{route('vehicle.destroy',$data->vehicle_ID)}}" method="POST">



                                                <a class="btn btn-primary" style="margin: 5px" href="{{route('vehicle.edit',$data->vehicle_ID)}}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="margin: 5px"  class="btn btn-danger">Delete</button>
{{--                                                <button type="button" data-toggle="modal" class="btn btn-danger" data-target="#exampleModal" >Delete</button>--}}
                                                <a class="btn btn-success" style="margin: 5px" href="{{route('vehicle.show',$data->vehicle_ID)}}">View</a>
                                                <a class="btn btn-info" style="margin: 5px" href="{{route('vehicle.addVehicleStock',$data->vehicle_ID)}}">Add Stock</a>
                                                </form>
                                            </center>
                                        </td>
                                       </tr>
                                @endforeach
                                </center></tbody>

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


