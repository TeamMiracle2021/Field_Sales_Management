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
                    <h3>Add new product details</h3>
                </div>

                <div class="card-body">
<!-- valiodation -->
{{--                    @if($errors->any())--}}
{{--                    @foreach($errors->all() as $error)--}}


{{--                    <div class="alert alert-danger" role="alert">--}}
{{--                        {{$error}}--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                    @endif--}}
<!-- end of validation -->

                    <form action="{{route('product.store')}}" method="POST">

                        @csrf


                        <!-- Lable and text box of Product Name: -->

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Product Name:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_Name" placeholder="Enter product name" required>
                        </div>
                        </div>

                        <!-- Cost Price -->

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Cost Price</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="cost_price" placeholder="Enter cost price" required>
                        </div>
                        </div>





                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Sales Price</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="sales_price" placeholder="Enter sales price" required>
                        </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Labled Price</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name=" labled_price" placeholder="Enter labled price" required>
                        </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Weight</label>
                                <div class="col-sm-10">
                            <input type="text" class="form-control" name=" weight" placeholder="Enter weight">
                        </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Expire Date</label>
                            <div class="col-sm-10">
                            <input type="date" class="from-control" name="Expire_date" placeholder="Enter expire date">
                            </div>
                        </div>


{{--                        <div class="form-group row">--}}
{{--                            <label class="col-md-2 col-form-label">User Id</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <select class="form-control"  name="user_id" >--}}
{{--                                    @foreach ($users as $user)--}}
{{--                                        <option value="{{$user->userID}}">{{$user->userID}} -  {{$user->first_name}} {{$user->last_name}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Category ID</label>
                            <div class="col-sm-10">
                                <select class="form-control"  name="category_id" >
                                    @foreach ($categories as $category)
                                        <option value="{{$category->categoryID}}">{{$category->categoryID}} -  {{$category->category_name}} </option>
                                    @endforeach
                                </select>
                        </div>
                        </div>

                            <div class="text-right">
                                <button type="submit"  Value="Save" class="btn btn-primary">Save</button>
                                <a class="btn btn-secondary" href="{{route('shop.index')}}">Cancel</a>
                            </div>

                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            </form>
<section>
            @endsection
