@extends("layouts.app")


@section('title')
Product-Edit | Sales Automation system
@endsection


@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit role for product </h3>
                </div>

                <div class="card-body">

                    <form action="{{route('product.update',$product->productID)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label>Product Name:</label>
                            <input type="text" class="form-control" value="{{$product->product_Name}}" name="product_Name" placeholder="Enter product name">
                        </div>



                        <br>
                        <div class="form-group row">
                            <label>Cost Price</label>
                            <input type="text" class="form-control" value="{{$product->cost_price}}" name="cost_price" placeholder="Enter cost price">
                        </div>


                        <br>
                        <div class="form-group row">
                            <label>Sales Price</label>
                            <input type="text" class="form-control" value="{{$product->sales_price}}" name="sales_price" placeholder="Enter sales price">
                        </div>


                        <br>
                        <div class="form-group row">
                            <label>Labled Price</label>
                            <input type="text" class="form-control" value="{{$product->labled_price}}" name="labled_price" placeholder="Enter labled price">
                        </div>



                        <br>
                        <div class="form-group row">
                            <label>Weight</label>
                            <input type="text" class="form-control" value="{{$product->weight}}" name="weight" placeholder="Enter weight">
                        </div>


                        <br>
                        <div class="form-group row">
                            <label></label>
                            <input type="date" class="form-control" value="{{$product->Expire_date}}" name="Expire_date" placeholder="Enter expire date">
                        </div>


                        <br>
                        <!-- <div class="form-group row">
                            <label>User Id</label>
                            <input type="text" class="form-control" value="" name="user_id" placeholder="Enter user id">
                        </div> -->


                        <br>
                        <div class="form-group row">
                            <label>Category ID</label>
                            <input type="text" class="form-control" value="{{$product->category_id}}" name="category_id" placeholder="Enter category name">
                        </div>

                        <br>
                        <div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>


                    </form>


                </div>
            </div>
        </div>

    </div>

</div>

@endsection
