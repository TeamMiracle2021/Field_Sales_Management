
<!DOCTYPE html>
<html>
<head>
    <title>Shops of the <?php echo e($route->route_name); ?> Route</title>
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
                "<?php echo e($route->start_lat); ?>, <?php echo e($route->start_lng); ?>",
                "<?php echo e($route->end_lat); ?>, <?php echo e($route->end_lng); ?>",
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
                            <?php $__currentLoopData = $route->shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        { location: "<?php echo e($shop->lat); ?>, <?php echo e($shop->lng); ?>" },
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<body style="height:100vh">
<div id="map"></div>
<div id="right-panel" style="overflow-y: scroll">
    <a class="btn btn-primary float-right"  href="<?php echo e(route('route.index')); ?>">Back</a>
    <p>Total Distance: <span id="total"></span></p>

</div>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtJKoK6JIwlfXOAF4Y36OhVLhpFbYy7z0&callback=initMap&libraries=&v=weekly"
    async
></script>
</body>
</html>
<?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/maps/mapview.blade.php ENDPATH**/ ?>