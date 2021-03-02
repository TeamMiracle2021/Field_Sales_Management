@extends('Route.layout')

@section('content')

    <div class="form-group row">
        <div class="col-lg-12 margin-tb">
            <div class="float-right">
{{--                <a class="btn btn-success" data-toggle="modal" data-target="#myModal href="">Create</a>--}}
                <a class="btn btn-success"  href="{{route('route.create')}}">Create</a>


                <div class="container">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <form action="{{route('route.store')}}" method="POST">
                            @csrf

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Route</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Route Name: </label>
                                            <input type="text" class="form-control" placeholder="enter route name" name="route_name">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Shop Name: </label>
                                            <input type="text" class="form-control" placeholder="enter shop name" name="shop_ID">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>User Name: </label>
                                            <input type="text" class="form-control" placeholder="enter User name" name="user_id">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button  type="submit" class="btn btn-primary">submit</button>
                                    <a class="btn btn-primary" href="{{route('route.index')}}">Cancel</a>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Route Name</th>
            <th>Shop Name</th>
            <th>Action</th>
        </tr>
{{--        to view database data--}}
        <tr>

        </tr>
    </table>

@endsection
