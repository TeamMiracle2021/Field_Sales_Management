@extends('layouts.app')

@section('title')
    FSM | Shop Select From Map
@endsection



@section('content')



    @if($msg = Session::get('add'))
        <div class="alert alert-default-primary">
            <p>{{$msg}}</p>
        </div>
    @endif

    <section class="content">
        <h1><b><center>Select The Shop</center></b></h1>
        <div class="container-fluid">
            <div class="card">

                <div class="col-md-6">
                <h4><b>Clicked location :</b></h4>
                    <div id="latclicked" ></div>
                    <div id="longclicked"></div>
<br>
                    <div id="latmoved"></div>
                    <div id="longmoved"></div>

                    <div style="padding:10px">
                        <div id="map"></div>
                    </div>
                </div>


            </div>

        </div>
        <!-- /.container-fluid -->
        </div>

    </section>



@endsection

@section('jscript')
    <script type="text/javascript">
        var map;

        function initMap() {

            var latitude = 7.8731; // YOUR LATITUDE VALUE
            var longitude = 80.7718; // YOUR LONGITUDE VALUE

            var myLatLng = {lat: latitude, lng: longitude};

            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 8,
                disableDoubleClickZoom: true, // disable the default map zoom on double click
            });
            {


                // Update lat/long value of div when anywhere in the map is clicked
                google.maps.event.addListener(map, 'click', function (event) {
                    document.getElementById('latclicked').innerHTML = event.latLng.lat();
                    document.getElementById('longclicked').innerHTML = event.latLng.lng();


                });

                // Update lat/long value of div when you move the mouse over the map
                google.maps.event.addListener(map, 'mousemove', function (event) {
                    // document.getElementById('latmoved').innerHTML = event.latLng.lat();
                    // document.getElementById('longmoved').innerHTML = event.latLng.lng();
                });

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    //title: 'Hello World'

                    // setting latitude & longitude as title of the marker
                    // title is shown when you hover over the marker
                    title: latitude + ', ' + longitude
                });

                // Update lat/long value of div when the marker is clicked
                marker.addListener('click', function (event) {
                    document.getElementById('latclicked').innerHTML = event.latLng.lat();
                    document.getElementById('longclicked').innerHTML = event.latLng.lng();
                });

                // Create new marker on double click event on the map
                google.maps.event.addListener(map, 'dblclick', function (event) {
                    var marker = new google.maps.Marker({
                        position: event.latLng,
                        map: map,
                        title: event.latLng.lat() + ', ' + event.latLng.lng()


                    });

                    // Update lat/long value of div when the marker is clicked
                    marker.addListener('click', function () {
                        document.getElementById('latclicked').innerHTML = event.latLng.lat();
                        document.getElementById('longclicked').innerHTML = event.latLng.lng();




                    });
                });
            }
            // Create new marker on single click event on the map
            /*google.maps.event.addListener(map,'click',function(event) {
                var marker = new google.maps.Marker({
                  position: event.latLng,
                  map: map,
                  title: event.latLng.lat()+', '+event.latLng.lng()
                });
            });*/
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpXzrZUX5wPh9ayMMP4n81oJ29wzdpCHo&callback=initMap"
            async defer></script>

@endsection
