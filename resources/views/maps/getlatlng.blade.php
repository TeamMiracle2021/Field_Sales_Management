<!DOCTYPE html>
<html>
<head>
    <title>get lat lng on click</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map2 {
            height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <script>
        function initMap() {
            const myLatlng = { lat: 6.5, lng: 79.5 };
            const map = new google.maps.Map(document.getElementById("map2"), {
                zoom: 8,
                center: myLatlng,
            });
            // Create the initial InfoWindow.
            let infoWindow = new google.maps.InfoWindow({
                content: "Click the map to get Lat/Lng!",
                position: myLatlng,
            });
            infoWindow.open(map2);
            // Configure the click listener.
            map.addListener("click", (mapsMouseEvent) => {
                // Close the current InfoWindow.
                infoWindow.close();
                // Create a new InfoWindow.
                infoWindow = new google.maps.InfoWindow({
                    position: mapsMouseEvent.latLng,
                });
                infoWindow.setContent(
                    JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
                );
                infoWindow.open(map2);
            });
        }
    </script>
</head>
<body>
<div id="map2"></div>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtJKoK6JIwlfXOAF4Y36OhVLhpFbYy7z0&callback=initMap&libraries=&v=weekly"
    async
></script>
</body>
</html>


