@extends("layouts.app")


@section('title')
 Product Wise Sales Report From {{$sd}} To {{$ed}}
@endsection

@section('content')


<br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <div class="float-right">
                                <a class="btn btn-primary"  href="{{route('report.index')}}">Back</a>
                            </div>

                        </div>


                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h4><b><center>Product Wise Sales Report From {{$sd}} To {{$ed}}</center></b></h4>


                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example16" class="table table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Total</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productsales as $data)

                                    <tr>
                                        <td>{{$data->product_Name}}</td>
                                        <td>{{$data->quantity}}</td>
                                        <td>{{$data->total}}</td>

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


@section('jscript')



    {{--for csv pdf execl--}}
    <script >
        $(document).ready(function() {
            $('#example16').DataTable( {
                "responsive": true,
                "autoWidth": true,
                "info": true,
                 dom: 'SBfrti',
                 buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],

            } );
        } );
    </script>





@endsection
