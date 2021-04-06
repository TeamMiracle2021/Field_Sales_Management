@extends("layouts.app")


@section('title')
    Product Report
@endsection

@section('content')



    <section class="content">
        <h4><b><center>Reports of Shops</center></b></h4>
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
                                    <th>Shop ID</th>
                                    <th>Shop Name</th>
                                    <th>Owner Name</th>
                                    <th>Owner NIC</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Address No</th>
                                    <th>Suburb</th>
                                    <th>City</th>
                                    <th>Province</th>
                                    <th>Country</th>
                                    <th>Tele. No</th>
                                    <th>Reg. Date</th>
                                    <th>Due Dates</th>
                                    <th>User</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Image</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Shop as $data)

                                    <tr>
                                        <td>{{$data->ShopID}}</td>
                                        <td>{{$data->shop_name}}</td>
                                        <td>{{$data->owner_name}}</td>
                                        <td>{{$data->owner_NIC}}</td>
                                        <td>{{$data->lat}}</td>
                                        <td>{{$data->lng}}</td>
                                        <td>{{$data->address_no}}</td>
                                        <td>{{$data->suburb}}</td>
                                        <td>{{$data->city}}</td>
                                        <td>{{$data->province}}</td>
                                        <td>{{$data->country}}</td>
                                        <td>{{$data->telephone_numbers}}</td>
                                        <td>{{$data->registered_date}}</td>
                                        <td>{{$data->due_dates}}</td>
                                        <td>{{$data->user_id}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>{{$data->updated_at}}</td>
                                        <td><img src="{{asset('uploads/shop/'.$data->image)  }}"
                                                 class="img-bordered-sm" width="75px;" height="75px;" alt="Product-Image"></td>

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
