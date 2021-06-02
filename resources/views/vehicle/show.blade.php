@extends("layouts.app")

@section('content')
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h3 class="float-left"><b>Vehicle Details</b></h3>
                                    <a class="btn btn-primary float-right" href="{{route('vehicle.index')}}">back</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="table table-responsive">
                                    <table class="table table-bordered" id="shopTable">

                                        <tr>
                                            <th>Vehicle</th>
                                            <th>Details</th>
                                        </tr>

                                        <tr>
                                            <td>Vehicle No</td>
                                            <td> {{$user[0]->vehicle_no}}</td>
                                        </tr>

                                        <tr>
                                            <td>Capacity</td>
                                            <td> {{$user[0]->capacity}}</td>
                                        </tr>

                                        <tr>
                                            <td>Description</td>
                                            <td>{{$user[0]->description}}</td>
                                        </tr>

                                        <tr>
                                            <td>Sales Representative</td>
                                            <td> {{$user[0]->first_name}} {{$user[0]->middle_name}} {{$user[0]->last_name}}</td>
                                        </tr>




                                    </table>
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
    </section>
@endsection





























