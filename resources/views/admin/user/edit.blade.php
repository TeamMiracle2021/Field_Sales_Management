@extends('layouts.app')

@section('title')
Edit-User | Sales Automation system
@endsection


@section('content')

<br>
<section class="content">
<div class="container-fluid">
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit user</h2>
                </div>
                    <div class="card-body">
                       
                        <form method="POST" action="{{ route('user.update',$user->userID) }}">

                            @csrf
                            @method('PUT')


                        <div class="form-group row">
                                <label for="first_name" class="col-md-2 col-form-label">First Name:</label>
                                    <div class="col-sm-10">
                                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{$user->first_name}}" name="first_name"  required autocomplete="first_name" autofocus placeholder="First Name">
                                    
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                    </div>
                            </div>



                            <div class="form-group row">
                                <label for="middle_name" class="col-md-2 col-form-label">Middle Name:</label>
                                    <div class="col-sm-10">
                                        <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" value="{{$user->middle_name}}" name="middle_name" required autocomplete="middle_name"autofocus placeholder="Middle Name">
                                    
                                        @error('middle_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                    </div>
                            </div>


                            <div class="form-group row">
                                <label for="last_name" class="col-md-2 col-form-label">Last Name:</label>
                                    <div class="col-sm-10">
                                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{$user->last_name}}" name="last_name" required autocomplete="last_name" autofocus placeholder="Last Name">
                                   
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                   
                                    </div>
                            </div>



                            <div class="form-group row">
                                <label for="NIC" class="col-md-2 col-form-label">NIC:</label>
                                    <div class="col-sm-10">
                                        <input id="NIC" type="text" class="form-control @error('NIC') is-invalid @enderror" value="{{$user->NIC}}" name="NIC" required autocomplete="NIC" autofocus placeholder="NIC">
                                    
                                        @error('NIC')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                    </div>
                            </div>



                            <div class="form-group row">
                                <label for="Address" class="col-md-2 col-form-label">Address:</label>
                                    <div class="col-sm-10">
                                        <input id="Address" type="text" class="form-control @error('Address') is-invalid @enderror" value="{{$user->Address}}" name="Address" required autocomplete="Address" autofocus placeholder="Address">
                                    
                                        @error('Address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                    </div>
                            </div>



                             <div class="form-group row">
                                <label for="telephone_number" class="col-md-2 col-form-label">Telephone Number:</label>
                                    <div class="col-sm-10">
                                        <input id="telephone_number" type="text" class="form-control @error('telephone_number') is-invalid @enderror" value="{{$user->telephone_number}}" name="telephone_number"  required autocomplete="telephone_number" autofocus placeholder="Telephone Number">
                                    
                                        @error('telephone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                    
                                    </div>
                            </div>



                            <div class="form-group row">
                                <label for="gender" class="col-md-2 control-label">Gender:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" value="{{$user->Gender}}" name="Gender" required="required">
                                        <option value="male" name="male">Male</option>
                                        <option value="female" name="female">Female</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- @error('Address')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror -->

                        

                            <div class="form-group row">
                            <label for="gender" class="col-md-2 control-label">Date of Birth:</label>
                                <div class="col-sm-10">
                                    <input id="Date_Of_Birth" type="date" class="from-control" value="{{$user->Date_Of_Birth}}" name="Date_Of_Birth" required autofocus>
                                
                                    @if ($errors->has('Date_Of_Birth'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('dob') }}</strong>
                                        </span>
                                    @endif
                                
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="branch_name" class="col-md-2 col-form-label">Branch Name:</label>
                                    <div class="col-sm-10">
                                        <input id="branch_name" type="text" class="form-control @error('branch_name') is-invalid @enderror" value="{{$user->branch_name}}" name="branch_name" required autocomplete="branch_name" autofocus placeholder="Branch Name">
                                    
                                    @error('branch_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                    
                                    </div>
                            </div>

                            

                            
                            <div class="form-group row">
                                <label for="usertypes" class="col-md-2 control-label">User Type:</label>
                                <div class="col-sm-10">
                                <select class="form-control" value="{{$user->usertypes}}" name="usertypes" required="required">
                                    <option value="Admin">Admin</option>
                                    <option value="sales_manager">Sales manager</option>
                                    <option value="area_manager">Area manager</option>
                                    <option value="distributor">Distributor</option>
                                </select>
                                </div>
                            </div>  


                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label">Email:</label>
                                    <div class="col-sm-10">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" name="email" required autocomplete="email" placeholder="Email Address">
                                        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                            </div>


                            <div class="text-right">
                                <input name="register" id="register" class="btn btn-primary" type="submit" value="Save">
                                <a class="btn btn-secondary" href="{{route('user.index')}}">Cancel</a> 
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection