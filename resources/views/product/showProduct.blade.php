@extends("layouts.app")

@section('content')
<br><br><br>
<div class="row">
    <div class="col-xl-12">
        <div class="pull-left">
            <h3>Product Details</h3>
            <a class="btn btn-xs btn-primary" href="{{route('product.index')}}">back</a>
        </div>
    </div>
</div>

<!-- <div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <strong>ID: </strong>
            {{$product->productID}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Name: </strong>
            {{$product->product_Name}}
        </div>
    </div>
</div> -->





<div class="row">
    <div class="table table-responsive">
        <table class="table table-bordered" id="productTable">

            <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Cost Price</th>
                <th>Sales Price</th>
                <th>Labled Price</th>
                <th>Weight</th>
                <th>Expire Date</th>
                <!-- <th>user_id</th> -->
                <th>Category Id</th>
                <th>Created At</th>
                <th>Updated At</th>

            </tr>

            <tr>

                <td> {{$product->productID}}</td>
                <td> {{$product->product_Name}}</td>
                <td> {{$product->cost_price}}</td>
                <td> {{$product->sales_price}}</td>
                <td> {{$product->labled_price}}</td>
                <td> {{$product->weight}}</td>
                <td> {{$product->Expire_date}}</td>
                <!-- <td> {{$product->user_id}}</td> -->
                <td> {{$product->category_id}}</td>
                <td> {{$product->created_at}}</td>
                <td> {{$product->updated_at}}</td>


            </tr>

            @endsection

        </table>
    </div>
</div>
