@extends("layouts.app")


@section('title')
    Order Details Report
@endsection

@section('content')



    <section class="content">
        <h3><b><center>Reports of Order Details</center></b></h3>
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
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>QTY</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order as $data)

                                    <tr>
                                        <td>{{$data->OrderID}}</td>
                                        <td>{{$data->product_Name}}</td>
                                        <td>{{$data->quantity_per_product}}</td>

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
