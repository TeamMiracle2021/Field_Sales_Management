@extends('layouts.app')

@section('title')
    FSM | Route Step 02
@endsection



@section('content')

<br>

    @if($msg = Session::get('add'))
        <div class="alert alert-default-primary">
            <p>{{$msg}}</p>
        </div>
    @endif

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="float-left">
                            <p>Total Distance: <span id="total"></span></p>
                        </div>
                        <label  class="col-md-8 control-label"></label>
                        <div class="float-right">
                            <a class="btn btn-success float-right" style="margin: 5px" href="{{route('route.index')}}">Confirm</a>
                            <a class="btn btn-danger float-right" style="margin: 5px" href="{{route('route.deleteWhenCreate',$r_id)}}">Delete</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="card">
                <div id="map"></div>
            </div>

        </div>
        <!-- /.container-fluid -->
        </div>

    </section>



@endsection

@section('jscript')
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: { lat: 6.9, lng: 79 },
                mapTypeId: "terrain",
            });

            //
            // const rectangle = new google.maps.Rectangle({
            //     strokeColor: "#ff0000",
            //     strokeOpacity: 0.8,
            //     strokeWeight: 2,
            //     fillColor: "#FF0000",
            //     fillOpacity: 0.35,
            //     map,
            //     bounds: {
            //         north: 6.938,
            //         south: 6.900,
            //         east: 79.880,
            //         west: 79.838,
            //     },
            // });

            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer({
                draggable: true,
                map,
                panel: document.getElementById("right-panel"),
            });
            directionsRenderer.addListener("directions_changed", () => {
                computeTotalDistance(directionsRenderer.getDirections());
            });
            displayRoute(
                "{{ $lastroute->start_lat }}, {{ $lastroute->start_lng }}",
                "{{ $lastroute->end_lat }}, {{ $lastroute->end_lng }}",
                directionsService,
                directionsRenderer
            );
        }

        function displayRoute(origin, destination, service, display) {
            service.route(
                {
                    origin: origin,
                    destination: destination,
                    waypoints: [],
                    travelMode: google.maps.TravelMode.DRIVING,
                    avoidTolls: true,
                },
                (result, status) => {
                    if (status === "OK" && result) {
                        display.setDirections(result);
                    } else {
                        alert("Could not display directions due to: " + status);
                    }
                }
            );
        }

        function computeTotalDistance(result) {
            let total = 0;
            const myroute = result.routes[0];

            if (!myroute) {
                return;
            }

            for (let i = 0; i < myroute.legs.length; i++) {
                total += myroute.legs[i].distance.value;
            }
            total = total / 1000;
            document.getElementById("total").innerHTML = total + " km";









        }
    </script>




    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpXzrZUX5wPh9ayMMP4n81oJ29wzdpCHo&callback=initMap&libraries=&v=weekly"
        async
    ></script>
@endsection
