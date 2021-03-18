@extends("layouts.app")

@section('content')

@if($msg=Session::get('alert'))
<div class="alert alert-default-primary">
    <p>{{$msg}}</p>
</div>
@endif

{{--<!-- valiodation -->--}}
{{--@if($errors->any())--}}
{{--@foreach($errors->all() as $error)--}}


{{--<div class="alert alert-danger" role="alert">--}}
{{--    {{$error}}--}}
{{--</div>--}}
{{--@endforeach--}}
{{--@endif--}}
{{--<!-- end of validation -->--}}

{{--        <form action="{{route('category.store')}}" method="POST">--}}

{{--            @csrf--}}



{{--            <div class="modal fade" id="createCreateModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}


{{--                <!-- hedaer of the popup form    -->--}}

{{--                <div class="modal-dialog">--}}

{{--                    <div class="modal-content">--}}

{{--                        <div class="modal-header">--}}

{{--                            <h5 class="modal-title" id="exampleModalLabel">Add new category details</h5>--}}

{{--                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}

{{--                        </div>--}}




{{--                        <!-- Lable and text box of Product Name: -->--}}

{{--                        <div class="modal-body">--}}

{{--                            <div class="form-group">--}}

{{--                                <label>Category Name :</label><br>--}}

{{--                                <input type="text" class="form-control" name="category_name" placeholder="Enter category name ">--}}

{{--                            </div>--}}

{{--                        </div>--}}

{{--                        <div class="modal-footer">--}}
{{--                            <button type="submit" class="btn btn-primary">Save</button>--}}
{{--                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--        </form>--}}





            <section class="content">
                <h1><b><center>Products</center></b></h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-primary"  href="{{route('product.create')}}">Create Product</a>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Cost Price</th>
                                            <th>Sales Price</th>
                                            <th>Weight</th>
                                            <th width="200px">Category Id</th>
                                            <th class="text-center" width="380px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product as $data)

                                            <tr>
                                                <td>{{$data->product_Name}}</td>
                                                <td>{{$data->cost_price}}</td>
                                                <td>{{$data->sales_price}}</td>
                                                <td>{{$data->weight}}</td>
                                                <td>{{$data->category_id}}</td>
                                                <td>
                                                    <form action="{{route('product.destroy',$data->productID)}}" method="POST">
                                                        <a class="btn btn-primary" href="{{route('product.edit',$data->productID)}}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>


                                                        <a class="btn btn-primary" href="{{route('product.show',$data->productID)}}">View</a>
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
