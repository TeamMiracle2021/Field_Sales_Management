@extends("layouts.app")

@section('title')
Product-Edit | Sales Automation system
@endsection


@section('content')

<br><br>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add new product details</h3>
                </div>

                <div class="card-body">
<!-- valiodation -->
                    @if($errors->any())
                    @foreach($errors->all() as $error)


                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach
                    @endif
<!-- end of validation -->

                    <form action="{{route('product.store')}}" method="POST">

                        @csrf


                        <!-- Lable and text box of Product Name: -->

                        <div class="form-group row">

                            <label>Product Name:</label><br>

                            <input type="text" class="form-control" name="product_Name" placeholder="Enter product name">



                        </div>

                        <br>
                        <!-- Cost Price -->

                        <div class="form-group row">

                            <label>Cost Price</label><br>

                            <input type="text" class="form-control" name="cost_price" placeholder="Enter cost price">



                        </div>


                        <br>
                        <div class="form-group row">
                            <label>Sales Price</label><br>

                            <input type="text" class="form-control" name="sales_price" placeholder="Enter sales price">


                        </div>



                        <br>
                        <div class="form-group row">
                            <label>Labled Price</label><br>
                            <input type="text" class="form-control" name=" labled_price" placeholder="Enter labled price">

                        </div>


                        <br>
                        <div class="form-group row">
                            <label>Weight</label><br>
                            <input type="text" class="form-control" name=" weight" placeholder="Enter weight">

                        </div>


                        <br>
                        <div class="form-group row">
                            <label>Expire Date</label><br>
                            <input type="date" class="form-control" name="Expire_date" placeholder="Enter expire date">

                        </div>


                        <br>
                        <div class="form-group row">
                            <label>User Id</label><br>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user id">

                        </div>
                        <br>

                        <div class="form-group row">
                            <label>Category ID</label><br>
                            <input type="text" class="form-control" name="category_id" placeholder="Enter category name">

                        </div>
                        <br>
                        <br>
                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                </div>

            </div>
            </form>

            @endsection
