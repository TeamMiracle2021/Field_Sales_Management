<!DOCTYPE html>
<html>
<head>
    <title>Draggable Directions</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
        #right-panel {
            font-family: "Roboto", "sans-serif";
            line-height: 30px;
            padding-left: 10px;
        }

        #right-panel select,
        #right-panel input {
            font-size: 15px;
        }

        #right-panel select {
            width: 100%;
        }

        #right-panel i {
            font-size: 12px;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #map {
            height: 100%;
            float: left;
            width: 63%;
            height: 100%;
        }

        #right-panel {
            float: right;
            width: 34%;
            height: 100%;
        }

        .panel {
            height: 100%;
            overflow: auto;
        }
    </style>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: { lat: 6.9, lng: 79 },
            });
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
                {{ $route->start_lat }}"6.921215720773966, {{ $route->start_lng }}79.84635294669383",
                {{ $route->end_lat }}"6.906008772681582, {{ $route->end_lng }}79.91032383776876",
                directionsService,
                directionsRenderer
            );
        }

        function displayRoute(origin, destination, service, display) {
            service.route(
                {
                    origin: origin,
                    destination: destination,
                    waypoints: [
                        { location: "6.910194224371244, 79.85917172445397" },
                        { location: "6.9160024073925115, 79.8587750655634" },
                        { location: "6.918266594989434, 79.85837840667284" },
                        { location: "6.92200740288371, 79.85808091250492" },
                        { location: "6.921712077022503, 79.86135334835207" },
                        { location: "6.943467253667741, 79.86611325503887" }
                    ],
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
</head>
<body>
<div id="map"></div>
<div id="right-panel">
    <p>Total Distance: <span id="total"></span></p>
</div>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtJKoK6JIwlfXOAF4Y36OhVLhpFbYy7z0&callback=initMap&libraries=&v=weekly"
    async
></script>
</body>
</html>
