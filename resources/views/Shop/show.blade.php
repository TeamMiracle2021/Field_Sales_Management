@extends("Shop.layout")


@section('content')

    <div class="form-group row">
        <div class="col-lg-12 margin-tb">
            <center><h2 class="modal-title"><b>View Shop Details</b></h2></center>
        </div>
    </div>

    <center><form>
    <div class="row">



       <div class="col-lg-12">
            <div class="form-group">
                <td><strong>Shop Name: </strong></td>
                <td>{{$shop->shop_name}}</td>
            </div>
        </div>


            <div class="col-lg-12">
            <div class="form-group">
                <td><strong>Owner Name: </strong></td>
                <td>{{$shop->owner_name}}</td>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Owner NIC: </strong>
                {{$shop->owner_NIC}}
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Latitude: </strong>
                {{$shop->lat}}
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Longitude: </strong>
                {{$shop->Lng}}
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Image: </strong>
                {{$shop->image}}
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Address No: </strong>
                {{$shop->address_no}}
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Suburb: </strong>
                {{$shop->suburb}}
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>City: </strong>
                {{$shop->city}}
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Province: </strong>
                {{$shop->province}}
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Country: </strong>
                {{$shop->country}}
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Registered Date: </strong>
                {{$shop->registered_date}}
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Due Dates: </strong>
                {{$shop->due_dates}}
            </div>
        </div>

         <div class="col-lg-12">
            <div class="form-group">
                <strong>User ID :</strong>
                {{$shop->user_id}}
            </div>
        </div>


    </div>

    </form></center>

    <div class="text-right">
        <a class="btn btn-primary" href="{{route('shop.index')}}">Cancel</a>
    </div>



@endsection
