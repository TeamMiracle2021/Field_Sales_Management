{{--@extends("layouts.app")--}}

{{--@section('title')--}}
{{--    Product-Stock Add | Sales Automation system--}}
{{--@endsection--}}


{{--@section('content')--}}

{{--    <br>--}}
{{--    <section class="content">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}

{{--                <div class="col-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xl-12">--}}
{{--                                    <h3 class="float-left">Add Stock</h3>--}}

{{--                                    <a class="btn btn-primary float-right" style="margin: 5px" href="{{route('vehicle.index')}}">Back</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card-body">--}}



{{--                            <form action="{{route('vehicle.saveVehicleStock',$user[0]->userID)}}" method="POST">--}}
{{--                                @csrf--}}

{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-md-2 col-form-label">Sales Representative:</label>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <input type="text" class="form-control" name="route_name" value="{{$user[0]->first_name}} {{$user[0]->middle_name}} {{$user[0]->last_name}}" readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-md-2 col-form-label">Lorry No:</label>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <input type="text" class="form-control" name="route_name" value="{{$user[0]->vehicle_no}}" readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--<br><br>--}}
{{--                                <table class="table" id="products_table">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>Product</th>--}}
{{--                                        <th>Enter Quantity</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr id="product0">--}}
{{--                                        <td>--}}
{{--                                            <select name="products[]" class="form-control">--}}
{{--                                                <option value="">-- choose product --</option>--}}
{{--                                                @foreach ($product as $product)--}}
{{--                                                    <option value="{{ $product->productID }}">--}}
{{--                                                        {{ $product->product_Name }}--}}
{{--                                                        ----------- Current Qty :- {{ $product->qty}}--}}
{{--                                                    </option>--}}


{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </td>--}}


{{--                                        <td>--}}
{{--                                            <input type="number" name="quantities[]" class="form-control" value="0" />--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr id="product1"></tr>--}}
{{--                                    </tbody>--}}

{{--                                </table>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <button id="add_row" class="btn btn-outline-primary pull-left"><i class="fas fa-plus"></i></button>--}}
{{--                                        <button id='delete_row' class="pull-right btn btn-outline-danger"><i class="fas fa-minus"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <br><br>--}}
{{--                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
{{--                                    <button type="submit" class="btn btn-primary">Add Stock</button>--}}
{{--                                </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </section>--}}
{{--@endsection--}}


{{--@section('jscript')--}}


{{--    <script >--}}
{{--        $(document).ready(function(){--}}
{{--            let row_number = 1;--}}
{{--            $('#add_row').click(function(e){--}}
{{--                e.preventDefault();--}}
{{--                let new_row_number = row_number - 1;--}}
{{--                $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');--}}
{{--                $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');--}}
{{--                row_number++;--}}
{{--            });--}}

{{--            $("#delete_row").click(function(e){--}}
{{--                e.preventDefault();--}}
{{--                if(row_number > 1){--}}
{{--                    $("#product" + (row_number - 1)).html('');--}}
{{--                    row_number--;--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}


{{--@endsection--}}
