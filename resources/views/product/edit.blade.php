@extends("layouts.app")


@section('title')
Product-Edit | Sales Automation system
@endsection


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
                            <h3 class="float-left"><b>Product Edit</b></h3>
                            <a class="btn btn-primary float-right" href="{{route('product.index')}}">back</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">

                    <form action="{{route('product.update',$product->productID)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Product Name:</label>
                             <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$product->product_Name}}" name="product_Name" placeholder="Enter product name">
                        </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Cost Price</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$product->cost_price}}" name="cost_price" placeholder="Enter cost price">
                        </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Sales Price</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$product->sales_price}}" name="sales_price" placeholder="Enter sales price">
                        </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Labled Price</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$product->labled_price}}" name="labled_price" placeholder="Enter labled price">
                        </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Weight</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$product->weight}}" name="weight" placeholder="Enter weight">
                        </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Expire Date</label>
                            <div class="col-sm-10">
                            <input type="date" class="from-control" value="{{$product->Expire_date}}" name="Expire_date" placeholder="Enter expire date">
                        </div>
                        </div>


                        <!-- <div class="form-group row">
                            <label>User Id</label>
                            <input type="text" class="form-control" value="" name="user_id" placeholder="Enter user id">
                        </div> -->



                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Category ID</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$product->category_id}}" name="category_id" placeholder="Enter category name">
                        </div>
                        </div>



                        <div class="text-right">
                            <button type="submit"  Value="Save" class="btn btn-primary">Save</button>
                            <a class="btn btn-secondary" href="{{route('product.index')}}">Cancel</a>
                        </div>

                    </form>


                </div>
            </div>
        </div>

    </div>

</div>
</section
@endsection
