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
                                    <h3 class="float-left"><b>Shop Details</b></h3>
                                    <a class="btn btn-primary float-right" href="{{route('shop.index')}}">back</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                @foreach($p as $privilage)
                                <img src="{{asset('uploads/unp/'.$privilage->privilage_name)   }}"
                                     class="img-bordered-sm" width="400px;" height="400px;" alt="Product-Image">
                                    @endforeach
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





























