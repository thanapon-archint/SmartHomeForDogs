<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Dogs</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">DOG LIST</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Search</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Login</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Dogs</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">DOG LIST</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Search</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">SMART HOME FOR DOGS</h1>
  <p class="w3-xlarge">Template by w3.css</p>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Lorem Ipsum</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Lorem Ipsum</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

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
            map.setCenter(currCenter);
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

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
