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
                                    <h3 class="float-left"><b>Products Add Via CSV</b></h3>
                                    <a class="btn btn-primary float-right" href="{{route('product.index')}}">back</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <form method='post' action='{{route('product.uploadFile')}}' enctype='multipart/form-data' >
                                {{ csrf_field() }}


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="category_id" >
                                            <option>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->categoryID}}">{{$category->categoryID}} -  {{$category->category_name}} </option>
                                            @endforeach

                                        </select>
                                        @if ($errors->any())
                                            <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                        @endif
                                    </div>
                                </div>






                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Select Csv File</label>
                                    <div class="col-sm-10">

                                        <input type='file' name='file' >
{{--                                        <input type='submit' name='submit' value='Import'>--}}

                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type='submit' name='submit' value='Import' class="btn btn-primary">Submit</button>
                                    <a class="btn btn-secondary" href="{{route('product.index')}}">Cancel</a>
                                </div>


                            </form>



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





























