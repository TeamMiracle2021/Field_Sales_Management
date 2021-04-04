@extends('layouts.app')

@section('title')
    Reports | Home
@endsection



@section('content')
    <section class="content">
        <h1><b><center>Reports</center></b></h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
{{--            <table class="table table-bordered table-striped">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th scope="col">Report Name</th>--}}
{{--                    <th scope="col">Source</th>--}}

{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <td>Product Report</td>--}}
                    <td><a class="btn btn-primary"  href="{{route('product.productreport')}}">Product Reports</a></td>



{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>User Report</td>--}}
                    <td><a class="btn btn-primary"  href="{{route('product.productreport')}}">User Reports</a></td>

{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Route Report </td>--}}
                    <td><a class="btn btn-primary"  href="{{route('route.routereport')}}">Route Reports</a></td>

{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>Shop Reports </td>--}}
                    <td><a class="btn btn-primary"  href="{{route('shop.shopreport')}}">Shop Reports</a></td>

{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Shop List: Unproductive </td>--}}
                    <td><a class="btn btn-primary"  href="{{route('product.productreport')}}">Shop Unproductives Reports</a></td>

{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>Order Details</td>--}}
                    <td><a class="btn btn-primary"  href="{{route('product.productreport')}}">Product Reports</a></td>

{{--                </tr>--}}


{{--                </tbody>--}}
{{--            </table>--}}
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
