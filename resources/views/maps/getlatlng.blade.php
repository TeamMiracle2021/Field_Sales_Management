{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Get LatLng From Map</title>--}}
{{--    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>--}}
{{--    <style type="text/css">--}}
{{--        /* Always set the map height explicitly to define the size of the div--}}
{{--         * element that contains the map. */--}}
{{--        #map {--}}
{{--            height: 100%;--}}
{{--        }--}}

{{--        /* Optional: Makes the sample page fill the window. */--}}
{{--        html,--}}
{{--        body {--}}
{{--            height: 100%;--}}
{{--            margin: 0;--}}
{{--            padding: 0;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <script>--}}
{{--        function initMap() {--}}
{{--            const myLatlng = { lat: 7.3, lng: 80};--}}
{{--            const map = new google.maps.Map(document.getElementById("map"), {--}}
{{--                zoom: 8,--}}
{{--                center: myLatlng,--}}
{{--            });--}}
{{--            // Create the initial InfoWindow.--}}
{{--            let infoWindow = new google.maps.InfoWindow({--}}
{{--                content: "Click the map to get Lat/Lng!",--}}
{{--                position: myLatlng,--}}
{{--            });--}}
{{--            infoWindow.open(map);--}}
{{--            // Configure the click listener.--}}
{{--            map.addListener("click", (mapsMouseEvent) => {--}}
{{--                // Close the current InfoWindow.--}}
{{--                infoWindow.close();--}}
{{--                // Create a new InfoWindow.--}}
{{--                infoWindow = new google.maps.InfoWindow({--}}
{{--                    position: mapsMouseEvent.latLng,--}}
{{--                });--}}
{{--                infoWindow.setContent(--}}
{{--                    JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)--}}
{{--                );--}}
{{--                infoWindow.open(map);--}}
{{--            });--}}
{{--        }--}}
{{--    </script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="map"></div>--}}

{{--<!-- Async script executes immediately and must be after any DOM elements used in callback. -->--}}
{{--<script--}}
{{--    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtJKoK6JIwlfXOAF4Y36OhVLhpFbYy7z0&callback=initMap&libraries=&v=weekly"--}}
{{--    async--}}
{{--></script>--}}
{{--</body>--}}
{{--</html>--}}









<html>
<head>
    <title>Google Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
        #map {
            height: 500px;
            width: 1100px;
        }
    </style>
</head>
<body>
<div id="latclicked"></div>
<div id="longclicked"></div>

<div id="latmoved"></div>
<div id="longmoved"></div>

<div style="padding:10px">
    <div id="map"></div>
</div>

<script type="text/javascript">
    var map;

    function initMap() {

        var mylat1 = 0;
        var mylng1 = 0;
        var latitude = 7.7172453; // YOUR LATITUDE VALUE
        var longitude = 80.3239605; // YOUR LONGITUDE VALUE

        var myLatLng = {lat: latitude, lng: longitude};

        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 14,
            disableDoubleClickZoom: true, // disable the default map zoom on double click
        });
        {
            var form = document.createElement("form");
            // Update lat/long value of div when anywhere in the map is clicked
            google.maps.event.addListener(map, 'click', function (event) {
                document.getElementById('latclicked').innerHTML = event.latLng.lat();
                document.getElementById('longclicked').innerHTML = event.latLng.lng();




                {{--form.method = "GET";--}}
                {{--form.action="{{route('route.test')}}";--}}


                {{--document.body.appendChild(form);--}}

                // form.submit();


            });

            // Update lat/long value of div when you move the mouse over the map
            google.maps.event.addListener(map, 'mousemove', function (event) {
                document.getElementById('latmoved').innerHTML = event.latLng.lat();
                document.getElementById('longmoved').innerHTML = event.latLng.lng();
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
                var element3 = document.createElement("input");
                var element4 = document.createElement("input");

                element3.value = event.latLng.lat();
                element3.name = "lat2";
                form.appendChild(element3);

                element4.value = event.latLng.lng();
                element4.name = "lng2";
                form.appendChild(element4);

                form.method = "GET";
                form.action = "{{route('route.test')}}";

                document.body.appendChild(form);

                form.submit();
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtJKoK6JIwlfXOAF4Y36OhVLhpFbYy7z0&callback=initMap"
        async defer></script>
</body>
</html>
