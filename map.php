
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
<?php
require_once('Navbar.php');
require_once('dbconfig.php');

$query = "SELECT * FROM dogs";
$result = mysqli_query($connect, $query);
$i=0;
$los1 = array();
$los2 = array();
while ($row = mysqli_fetch_array($result)){
  
  array_push($los1,"$row['location_x']");
  
  array_push($los2,"$row['location_y']");
}
  print_r($los1);



?>
   
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
            // Create the DIV to hold the control and call the CenterControl()
            // constructor passing in this DIV.
            var centerControlDiv = document.createElement('div');
            var centerControl = new CenterControl(centerControlDiv, map);

            centerControlDiv.index = 1;
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
            infoWindow.setPosition(pos);
            //infoWindow.setContent("You're here.");
            //infoWindow.open(map);
            var currCenter = map.setCenter(pos);
            google.maps.event.trigger(map, 'resize');
            map.setCenter(pos);
             //current location marker
            var marker = new google.maps.Marker({
            position: pos,
            map: map,
            });
            // Icons for markers
            var icons = {
			       url: "https://image.ibb.co/e6zzs6/DogIcon.png", // url
			       scaledSize: new google.maps.Size(50, 50), // scaled size
			     };
           var homeicons = {
             url: "https://image.ibb.co/jr4KAR/Home.png", // url
             scaledSize: new google.maps.Size(50, 50), // scaled size
           };
            // Sample marker
<?php
while ($row = mysqli_fetch_array($result)){

  $lo1=$row['location_x'];
  $lo2=$row['location_y'];

?>
            var jsvar1 = <?php echo json_encode($lo1); ?>;
            var jsvar2 = <?php echo json_encode($lo2); ?>;
            var marker = new google.maps.Marker({
            
            //position: {lat:<?=$lo1?>;, lng:<?=$lo2?>;},
            position: {lat:jsvar1, lng:jsvar2},
            map: map,
            icon:icons
           	});
<?php
}
?>
            // Marker for Animal Shelter
            var hmarker = new google.maps.Marker({
            position: {lat:14.2123158585, lng:101.23579999999},
            map: map,
            icon:homeicons
            });
            marker.addListener('click', function() {
            window.location.href = "dog_detail.php"// linked to info view of the dog.
            map.setZoom(6);//Remove this if the link had been added.
            });
            hmarker.addListener('click', function() {
            window.location.href = "dogshelter_detail.php"// linked to info view of the shelter.
            map.setZoom(6);//Remove this if the link had been added.
            });
            function CenterControl(controlDiv, map) {

        // Set CSS for the control border.
            var controlUI = document.createElement('div');
            controlUI.style.backgroundColor = '#fff';
            controlUI.style.border = '2px solid #fff';
            controlUI.style.borderRadius = '3px';
            controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
            controlUI.style.cursor = 'pointer';
            controlUI.style.marginBottom = '22px';
            controlUI.style.textAlign = 'center';
            controlUI.title = 'Click to recenter the map';
            controlDiv.appendChild(controlUI);

            // Set CSS for the control interior.
            var controlText = document.createElement('div');
            controlText.style.color = 'rgb(25,25,25)';
            controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
            controlText.style.fontSize = '16px';
            controlText.style.lineHeight = '38px';
            controlText.style.paddingLeft = '5px';
            controlText.style.paddingRight = '5px';
            controlText.innerHTML = 'Center Map';
            controlUI.appendChild(controlText);

            // Setup the click event listeners: simply set the map to Chicago.
            controlUI.addEventListener('click', function() {
              map.setCenter(pos);
            });

      }

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