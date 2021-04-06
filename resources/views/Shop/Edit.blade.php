@extends("Shop.layout")

@section("content")
    <div class="form-group row">
        <div class="col-lg-12 margin-tb">
            <center><h2 class="modal-title"><b>Edit Shop Details</b></h2></center>
        </div>
    </div>

    <form action="{{route('shop.update',$shop->ShopID)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label>Shop Name:</label>
                    <input type="text" class="from-control" value="{{$shop->shop_name}}" placeholder="Enter shop name" name="shop_name" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Owner Name:</label>
                    <input type="text" class="from-control" value="{{$shop->owner_name}}" placeholder="Enter owner name" name="owner_name" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Owner NIC:</label>
                    <input type="text" class="from-control" value="{{$shop->owner_NIC}}" placeholder="Enter owner NIC" name="owner_NIC" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Latitude:</label>
                    <input type="text" class="from-control" value="{{$shop->lat}}" placeholder="Enter latitude of shop" name="lat">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Longitude:</label>
                    <input type="text" class="from-control" value="{{$shop->lng}}" placeholder="Enter longitude of shop" name="lng">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" class="form-control" onchange="previewFile(this)" name="file">
                    <img id="previewImg" alt="shop image" style="max-width: 130px;margin-top: 20px;">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Address No:</label>
                    <input type="text" class="from-control" value="{{$shop->address_no}}" placeholder="Enter address No." name="address_no.">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Suburb:</label>
                    <input type="text" class="from-control" value="{{$shop->suburb}}" placeholder="Enter suburb" name="suburb">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>City:</label>
                    <input type="text" class="from-control" value="{{$shop->city}}" placeholder="Enter city" name="city">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Province:</label>
                    <select  name="province" >
                        <option value="Select">Select</option>
                        <option value="Central Province">Central Province</option>
                        <option value="Eastern Province">Eastern Province</option>
                        <option value="North Central Province">North Central Province</option>
                        <option value="Northern Province">Northern Province</option>
                        <option value="North Western Province">North Western Province</option>
                        <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                        <option value="Southern Province">Southern Province</option>
                        <option value="Uva Province">Uva Province</option>
                        <option value="Western Province">Western Province</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Country:</label>
                    <select  name="country" >
                        <option value="Select">Select</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Register Date:</label>
                    <input type="date" class="from-control" value="{{$shop->registered_date}}" placeholder="Register Date" name="registered_date">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Due Date:</label>
                    <input type="text" class="from-control" value="{{$shop->due_dates}}" placeholder="Enter due Date" name="due_dates">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>User ID:</label>
                    <input type="text" class="from-control" value="{{$shop->user_id}}" placeholder="Enter user ID" name="user_id">
                </div>
            </div>

        </div>

        <div class="text-right">
            <button type="submit"  Value="Save" class="btn btn-primary">Save</button>
            <a class="btn btn-primary" href="{{route('shop.index')}}">Cancel</a>
        </div>

    </form>

    <script>
        function previewFile(input){
            var file=$("input[type=file]").get(0).files[0];
            if(file){
                var reader = new FileReader();
                reader.onload = function (){
                    $('previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>


@endsection
