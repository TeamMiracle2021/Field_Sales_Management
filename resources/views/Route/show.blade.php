@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Show post</h3>
                <a class="btn btn-xs btn-primary" href="{{route('route.index')}}">back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Name: </strong>
                {{$route->route_name}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="form-group">
                <strong>User ID :</strong>
                {{$route->user_id}}
            </div>
        </div>
    </div>

@endsection
