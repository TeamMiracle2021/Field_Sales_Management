@extends('layouts.app')

@section('content')

@if($msg = Session::get('add'))
        <div class="alert alert-default-primary">
            <p>{{$msg}}</p>
        </div>
    @endif

<section class="content">
        <h1><b><center>User</center></b></h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <div class="float-left">
                <a class="btn btn-primary" href="{{route('admin.user.create')}}">Add User</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCreateModel" >Create usertype</button><br>
                                    
                                    
                    <form action="{{route('userType.store')}}" method="POST">
                        @csrf
                            <div class="modal fade" id="createCreateModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <!-- hedaer of the popup form    -->

                                <div class="modal-dialog">

                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <h5 class="modal-title" id="exampleModalLabel">Add new usertype</h5>

                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

                                            </div>




                                                <!--model->UserType: -->

                                            <div class="modal-body">

                                                <div class="form-group">

                                                    <label>User Type Name :</label><br>

                                                    <input type="text" class="form-control" name="user_type_name" placeholder="Enter uertype name" required>

                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <!-- /.card-header -->
                    <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="text-center">User ID</th>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>
                <!-- <th class="text-center">User Type</th> -->
                <th class="text-center">Branch</th>
                <th class="text-center">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($user as $data)
            <tr>
            <td>{{$data->userID}}</td>
            <td>{{$data->first_name}}</td>
            <td>{{$data->last_name}}</td>
            <!-- <td>{{$data->user_type_name}}</td> -->
            <td>{{$data->branch_name}}</td>
            <td class="text-center">
                <form action="{{route('admin.user.destroy',$data->userID)}}" method="POST">  
                    <a class='btn btn-primary' href="{{route('admin.user.show',$data->userID)}}">View</a>
                    <a class='btn btn-primary' href="{{route('admin.user.edit',$data->userID)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" >Delete</button>
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
        </div>

    </section>




@endsection




