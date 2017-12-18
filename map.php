
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 80%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow,marker;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 14.0656915, lng: 100.61388199999999},
          zoom: 12
        });

        infoWindow = new google.maps.InfoWindow;
        
        // HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent("You're here.");
            infoWindow.open(map);
            var currCenter = map.setCenter(pos);
            google.maps.event.trigger(map, 'resize');
            map.setCenter(pos);
             //current location marker
            var marker = new google.maps.Marker({
            position: pos,
            map: map,
            });
            var icons = {
			url: "https://image.ibb.co/e6zzs6/DogIcon.png", // url
			scaledSize: new google.maps.Size(50, 50), // scaled size
			};
             var marker = new google.maps.Marker({
             position: {lat:13.995858585, lng:100.825829999999},
             map: map,
             icon:icons
           	});

              //pin marker 
      //       setMarkers(map);
            
      //       function setMarkers(map) {
      //   // Adds markers to the map.

      //   // Marker sizes are expressed as a Size of X,Y where the origin of the image
      //   // (0,0) is located in the top left of the image.

      //   // Origins, anchor positions and coordinates of the marker increase in the X
      //   // direction to the right and in the Y direction down.
      //   // var image = {
      //   //   url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
      //   //   // This marker is 20 pixels wide by 32 pixels high.
      //   //   size: new google.maps.Size(20, 32),
      //   //   // The origin for this image is (0, 0).
      //   //   origin: new google.maps.Point(0, 0),
      //   //   // The anchor for this image is the base of the flagpole at (0, 32).
      //   //   anchor: new google.maps.Point(0, 32)
      //   // };
      //   // Shapes define the clickable region of the icon. The type defines an HTML
      //   // <area> element 'poly' which traces out a polygon as a series of X,Y points.
      //   // The final coordinate closes the poly by connecting to the first coordinate.
      //   // var shape = {
      //   //   coords: [1, 1, 1, 20, 18, 20, 18, 1],
      //   //   type: 'poly'
      //   // };
      //   var dogslocs = [
      //   ['1', 14.5689955, 100],
      //   ['2', 13.995858585, 100.8258299999],
      //   ['3', 14.798258955, 100.5868765886],
      //   ['4', 13.5689955, 100.127452852],
      //   ['5', 14.9741111, 101.486868868]
      // ];
      //   for (var i = 0; i < dogslocs.lenght; i++) {

      //     var dogsloc = dogslocs[i];
      //     var marker = new google.maps.Marker({
      //       position: {lat:dogsloc[1], lng:dogsloc[2]},
      //       //position: new google.maps.LatLng(dogsloc[1],dogsloc[2])
      //       map: map,
     
      //     });
       // }
      //}
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
     
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgVlJ_NecM0OUGWlenJcQRmYJpyb4i5vU&callback=initMap">
    </script>



      
    </h1>
</div>