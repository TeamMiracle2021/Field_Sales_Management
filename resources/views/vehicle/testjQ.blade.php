@extends("layouts.app")

@section("content")
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h3 class="float-left"><b>Add Vehicle</b></h3>
                                    <a class="btn btn-primary float-right" style="margin: 5px" href="{{route('vehicle.index')}}">Back</a>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">

                            <form action="{{route('vehicle.store')}}" method="POST" >

                                @csrf


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Vehicle No:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter vehicle Number" name="vehicle_no" value="{{old('vehicle_no')}}">
                                        @if ($errors->has('vehicle_no'))
                                            <span class="text-danger">{{ $errors->first('vehicle_no') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Capacity:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter Capacity" name="capacity" value="{{old('capacity')}}">
                                        @if ($errors->has('capacity'))
                                            <span class="text-danger">{{ $errors->first('capacity') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" >Other Description:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter description" name="description" value="{{old('description')}}">
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>









<p id="p4">Video provides a powerful way to help you prove your point.
    When you click Online Video, you can paste in the embed code for the video you want to add.
    You can also type a keyword to search online for the video that best fits your document.
    To make your document look professionally produced, Word provides header, footer, cover page,
    and text box designs that complement each other. For example, you can add a matching cover page,
    header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
</p>
    <button id="add_row" class="btn btn-outline-primary pull-left"><i class="fas fa-plus"></i></button>
     <button id='delete_row' class="pull-right btn btn-outline-danger"><i class="fas fa-minus"></i></button>

 <br>

 <p>Save time in Word with new buttons that show up where you need them.
     To change the way a picture fits in your document,
     click it and a button for layout options appears next to it.
     When you work on a table, click where you want to add a row or a column,
     and then click the plus sign.Reading is easier, too, in the new Reading view.
     You can collapse parts of the document and focus on the text you want.
     If you need to stop reading before you reach the end,
     Word remembers where you left off - even on another device.
  </p>

                                <div class="text-right">
                                    <button type="submit"  Value="Save" class="btn btn-primary">Save</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('jscript')
    <script>
        $(document).ready(function(){
            $('#add_row').click(function(e){
                e.preventDefault();
                $(":text").hide();
                $("#p4").before("huh huh huh");
                var txt = $("<tr></tr>").text("Hi");
                $("#p4").after(txt);

            });


            // $('#delete_row').click(function(e){
            //     e.preventDefault();
            //     $("#p4").show()
            // });

        });


    </script>

@endsection
