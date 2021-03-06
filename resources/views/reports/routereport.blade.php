@extends("layouts.app")


@section('title')
    Route Report
@endsection

@section('content')



    <section class="content">
        <h4><b><center>Reports of Routes</center></b></h4>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right">
                                <a class="btn btn-primary"  href="{{route('report.index')}}">Back</a>
                            </div>

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th>Route Name</th>
                                    <th>Start Latitude</th>
                                    <th>Start Longitude</th>
                                    <th>End Latitude</th>
                                    <th>End Longitude</th>
                                    <th>Due Dates</th>
                                    <th>Sales Representative</th>
                                    <th>No of Shops</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($route as $data)
                                    <tr>
                                        <td>{{$data->route_name}}</td>
                                        <td>{{$data->start_lat}}</td>
                                        <td>{{$data->start_lng}}</td>
                                        <td>{{$data->end_lat}}</td>
                                        <td>{{$data->end_lng}}</td>
                                        <td>{{$data->due_dates}}</td>
                                        <td>{{$data->first_name}} {{$data->last_name}}</td>
                                        <td>{{$data->quantity}}</td>


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
