@extends("layouts.app")

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
                                    <h3 class="float-left"><b>User Details</b></h3>
                                    <a class="btn btn-primary float-right" href="{{route('user.index')}}">back</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="table table-responsive">
                                    <table class="table table-bordered" id="shopTable">

                                        <tr>
                                            <th>User</th>
                                            <th>Details</th>
                                        </tr>

                                        <tr>
                                            <td>First Name</td>
                                            <td> {{$user->first_name}}</td>
                                        </tr>

                                        <tr>
                                            <td>Middle Name</td>
                                            <td> {{$user->middle_name}}</td>
                                        </tr>

                                        <tr>
                                            <td>Last Name</td>
                                            <td>{{$user->last_name}}</td>
                                        </tr>

                                        <tr>
                                            <td>NIC</td>
                                            <td> {{$user->NIC}}</td>
                                        </tr>

                                        <tr>
                                            <td>Address</td>
                                            <td> {{$user->Address}}</td>
                                        </tr>

                                        <tr>
                                            <td>Telephone Number</td>
                                            <td>{{$user->telephone_number}}</td>
                                        </tr>

                                        <tr>
                                            <td>Gender</td>
                                            <td> {{$user->Gender}}</td>
                                        </tr>

                                        <tr>
                                            <td>Date of Birth</td>
                                            <td> {{$user->Date_Of_Birth}}</td>
                                        </tr>

                                        <tr>
                                            <td>Branch Name</td>
                                            <td> {{$user->branch_name}}</td>
                                        </tr>

                                        <tr>
                                            <td>Email</td>
                                            <td>{{$user->email}}</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>



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





























