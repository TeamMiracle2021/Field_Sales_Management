@extends("Shop.layout")

@section("content")

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">

                <!-- Modal content-->
                <div class="container">
                    <center><h2>Shop Activities</h2></center>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD</button>
                    <input type="text" placeholder="Search.." name="search2">
                    <button type="submit"><i class="fa fa-search"></i></button>


                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <form action="{{route('shop.store')}}" method="POST">
                                @csrf
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Shop</h4>
                                    </div>

                                    <div class="modal-body">

                                        <label for="Shop Name" ><b> Shop Name : </b></label>
                                        <input type="text" name="shop_name" required style="background: #ffffff; margin: 5px 20px;  width: 50%" >
                                        <br>
                                        <label for="Owner Name" ><b>Owner Name : </b></label>
                                        <input type="text" name="owner_name" required style="background: #ffffff; margin: 5px 20px; width: 50%" >
                                        <br>
                                        <label for="Owner NIC" ><b>Owner NIC : </b></label>
                                        <input type="text" name="owner_NIC" required style="background: #ffffff; margin: 5px 20px; width: 50%" >
                                        <br>
                                        {{--                                       <label for="Contact number" ><b>Contact number : </b></label>--}}
                                        {{--                                       <input type="text" name="telephone_numbers" required style="background: #ffffff; margin: 5px 20px; width: 50%" >--}}
                                        {{--                                       <br>--}}
                                        <label for="Latitude" ><b>Latitude : </b></label>
                                        <input type="text" name="Lat" required style="background: #ffffff; margin: 5px 20px; width: 50%" >
                                        <br>
                                        <label for="Longitude" ><b>Longitude : </b></label>
                                        <input type="text" name="Lng" required style="background: #ffffff; margin: 5px 20px; width: 50%" >
                                        <br>
                                        <label for="Address No"><b>Address No : </b></label>
                                        <input type="text" name="address_no" style="background: #ffffff; margin: 5px 20px; width: 50%" >
                                        <br>
                                        <label for="Suburb" ><b>Suburb : </b></label>
                                        <input type="text" name="suburb" required style="background: #ffffff; margin: 5px 20px; width: 50%" >
                                        <br>
                                        <label for="City"><b>City : </b></label>
                                        <input type="text" name="city" style="background: #ffffff; margin: 5px 20px; width: 50%" >
                                        <br>
                                        <label for="Province"><b>Province : </b></label>
                                        <input type="text" name="province" style="background: #ffffff; margin: 5px 20px; width:50%" >
                                        <br>
                                        <label for="Country"><b>Country : </b></label>
                                        <input type="text" name="country" style="background: #ffffff; margin: 5px 20px; width: 50%" >
                                        <br>
                                        <label for="Register Date" ><b>Register Date : </b></label>
                                        <input type="Date" name="registered_date" required style="background: #ffffff; margin: 5px 20px; width: 50%" >
                                        <br>
                                        <label><b>Due Date : </b></label>
                                        <input type="text" name="due_dates" style="background: #ffffff; margin: 5px 22px; width: 50%" >
                                        <br>
                                        <label for="Image" ><b>Image : </b></label>
                                        <input type="Image" name="Image" style="background: #ffffff; margin: 5px 20px; width: 50%" >
                                        <br>
                                        <label for="userID"><b>UserID : </b></label>
                                        <input type="text" name="user_id" style="background: #ffffff; margin: 5px 22px; width: 50%" >
                                        <br>

                                        <div class="text-right">
                                            <button type="submit"  Value="Save" class="btn btn-default btn-lg">Save</button>
                                            {{--                                           <button type="button"  Value="Cancel "class="btn btn-default btn-lg">Cancel</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    @if($msg = Session::get("add"))--}}
    {{--        <div class="alert alert-success">--}}
    {{--            <p>$msg</p>--}}
    {{--        </div>--}}
    {{--    @endif--}}

    <table class="table table-bordered">
        <tr>
            <th>Shop Name</th>
            <th>Owner Name</th>
            <th>Suburb</th>
            <th>City</th>
            <th>Action</th>
        </tr>

        <tr>

        </tr>

    </table>

@endsection


