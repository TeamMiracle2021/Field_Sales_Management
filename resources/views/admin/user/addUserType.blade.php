@extends('user.master')

@section('content')
    
<div class="form group-row">
        <div class="col-lg-12 margin-tb">
            <div class="float-right">
                <h2>Add User Type</h2>
            </div>
            
        </div>

        <form action="{{route('userType.store')}}" method="POST">
        @csrf
            <div class="row">
                <div class="col-md-12">
                    <strong>User Type Name</strong>
                        <input type="text" class="form-control" placeholder="Enter user type" name="user_type_name">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Submit</button>
                        <a class="btn btn-primary" href="{{route('user.index')}}">Back</a>
                </div>
            </div>
        </form>
    </div>


@endsection 