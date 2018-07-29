<!doctype html>
<head>
        <style type="text/css">
          #map{ width:700px; height: 500px; }
        </style>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBVhwUUYfvfrMV5W3fQEwyJoNIrG1VDuZE"></script>
              <title>Save Marker Example</title>
    </head>
    <body>
        <h1>Select a location!</h1>
        <p>Click on a location on the map to select it. Drag the marker to change location.</p>
        
        <!--map div-->
        <div id="map"></div>
        <div id="output"></div>
        <!--our form-->
        <h2>Chosen Location</h2>
        <form method="post">
            <input type="hidden" id="lat" name="lat" readonly="yes"><br>
            <input type="hidden" id="lng" name="lng" readonly="yes">
        </form>
        
        <script type="text/javascript" src="map.js"></script>
<script>
	var map; //Will contain map object.
var marker = false; ////Has the user plotted their location marker? 
        
//Function called to initialize / create the map.
//This is called when the page has loaded.
function initMap() {
 
    //The center location of our map.
    var centerOfMap = new google.maps.LatLng(29.9613048,76.8230712 );
 
    //Map options.
    var options = {
      center: centerOfMap, //Set center.
      zoom: 7 //The zoom value.
    };
 
    //Create the map object.
    map = new google.maps.Map(document.getElementById('map'), options);
 
    //Listen for any clicks on the map.
    google.maps.event.addListener(map, 'click', function(event) {                
        //Get the location that the user clicked.
        var clickedLocation = event.latLng;
        //If the marker hasn't been added.
        if(marker === false){
            //Create the marker.
            marker = new google.maps.Marker({
                position: clickedLocation,
                map: map,
                draggable: true //make it draggable
            });
            //Listen for drag events!
            google.maps.event.addListener(marker, 'dragend', function(event){
                markerLocation();
            });
        } else{
            //Marker has already been added, so just change its location.
            marker.setPosition(clickedLocation);
        }
        //Get the marker's location.
        markerLocation();
    });
}
        
//This function will get the marker's current location and then add the lat/long
//values to our textfields so that we can save the location.
function markerLocation(){
    //Get location.
    var currentLocation = marker.getPosition();
    //Add lat and lng values to a field that we can save.
    document.getElementById('lat').value = currentLocation.lat(); //latitude
    document.getElementById('lng').value = currentLocation.lng(); //longitude
     var currentLocation = marker.getPosition();
    //Add lat and lng values to a field that we can save
        var origin1 = {lat: currentLocation.lat(), lng: currentLocation.lng()};
        var dA = {lat: 29.966049, lng: 76.834121};
        var dB = {lat: 29.9613048, lng: 76.8230712};
        var dC ="";
        var dD ="";
        var dE ="";
        var service = new google.maps.DistanceMatrixService;
        service.getDistanceMatrix({
          origins: [origin1],
          destinations: [dA],
          travelMode: 'DRIVING',
          unitSystem: google.maps.UnitSystem.METRIC,
          avoidHighways: false,
          avoidTolls: false
        }, function(response, status) {
          if (status !== 'OK') {
            alert('Error was: ' + status);
          } else {
            var originList = response.originAddresses;
            var destinationList = response.destinationAddresses;
            var outputDiv = document.getElementById('output');
            outputDiv.innerHTML = '';

            

           
              for (var i = 0; i < originList.length; i++) {
              var results = response.rows[i].elements;
              
              for (var j = 0; j < results.length; j++) {
                
                outputDiv.innerHTML += originList[i] + ' to ' + destinationList[j] +
                    ': ' + results[j].distance.text + ' in ' +
                    results[j].duration.value + '<br>';
              }
            }
            
          }
        });
}
        
        
//Load the map when the page has finished loading.
google.maps.event.addDomListener(window, 'load', initMap);
</script>

   
  </body>