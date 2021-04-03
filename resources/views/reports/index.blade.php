@extends('layouts.app')

@section('title')
    Route | FSM
@endsection



@section('content')
    <div class="container">
        <h1 class="text-center">Report</h1>
        <form>

            </form> </br>


            <table class="table table-borderless table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Report Name</th>
                    <th scope="col">Source</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Product Report</td>
{{--                    <td><a href="http://127.0.0.1:8000/list" class="btn btn-info" role="button" aria-pressed="true">Click here</a></td>--}}
                    <td><a class="btn btn-primary"  href="{{route('product.index1')}}">Product Reports</a></td>



                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>User Report</td>
                    <td><a class="btn btn-primary"  href="{{route('product.index1')}}">User Reports</a></td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Product List </td>
                    <td><a class="btn btn-primary"  href="{{route('product.index1')}}">Product Reports</a></td>

                </tr>

                <tr>
                    <th scope="row">4 </th>
                    <td>Shop List </td>
                    <td><a class="btn btn-primary"  href="{{route('product.index1')}}">Shop Reports</a></td>

                </tr>
                <tr>
                    <th scope="row">5 </th>
                    <td>Shop List: Unproductive </td>
                    <td><a class="btn btn-primary"  href="{{route('product.index1')}}">Shop Unproductives Reports</a></td>

                </tr>

                <tr>
                    <th scope="row">7 </th>
                    <td>Order Details</td>
                    <td><a class="btn btn-primary"  href="{{route('product.index1')}}">Product Reports</a></td>

                </tr>


                </tbody>
            </table>

@endsection
