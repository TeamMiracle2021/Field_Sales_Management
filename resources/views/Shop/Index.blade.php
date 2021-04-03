@extends("layouts.app")

@section("content")



@section('title')
    Shops | FSM
@endsection

        @if($msg = Session::get("add"))
            <div class="alert alert-default-primary">
                <p>{{$msg}}</p>
            </div>
        @endif



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

                                                <a class="btn btn-primary" href="{{route('shop.edit',$data->ShopID)}}">Edit</a>
                                                <button type="button" data-toggle="modal" class="btn btn-danger" data-target="#exampleModal" >Delete</button>
                                                <a class="btn btn-success" href="{{route('shop.show',$data->ShopID)}}">View</a>

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
                                            You are going to delete a shop. Do you want to continue ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            <form action="{{route('shop.destroy',$data->ShopID)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"  class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
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
    </section>
@endsection


