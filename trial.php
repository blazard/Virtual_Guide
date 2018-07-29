<!doctype html>
<head>
        <style type="text/css">
          #map{ width:700px; height: 500px; }
        </style>
        <script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2yF6Z6tsC7DPcHJ01UjggwVE2UFX7iGY&callback=initMap" async defer>
    </script>
        <title>Save Marker Example</title>
    </head>
    <body>
        <h1>Select a location!</h1>
        <p>Click on a location on the map to select it. Drag the marker to change location.</p>
        
        <!--map div-->
        <div id="map"></div>
        
        <!--our form-->
        <h2>Chosen Location</h2>
        <form method="post" action="calculate.php">
            <input type="hidden" id="time" name="lat" readonly="yes"><br>
            <input type="hidden" id="start" name="lng" readonly="yes">
        
        
       
<script>
	var map; //Will contain map object.
var marker = false; ////Has the user plotted their location marker? 
        
//Function called to initialize / create the map.
//This is called when the page has loaded.
function initMap() {
 
    //The center location of our map.
    var centerOfMap = new google.maps.LatLng(29.966049, 76.834121);
 
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
        } else{
            //Marker has already been added, so just change its location.
            marker.setPosition(clickedLocation);
        }
        
    });

        
//This function will get the marker's current location and then add the lat/long
//values to our textfields so that we can save the location.
        var currentLocation = marker.getPosition();
    //Add lat and lng values to a field that we can save
        var origin1 = {lat: currentLocation.lat(), lng: currentLocation.lng()};
        var dA = {lat: 29.966049, lng: 76.834121};
        var dB = {lat: 29.9613048, lng: 76.8230712};
        var dC =
        var dD =
        var dE =
        var service = new google.maps.DistanceMatrixService;
        service.getDistanceMatrix({
          origins: [origin1],
          destinations: dA,
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
            

            

           var timemin=99999999;
           var des;
              for (var j = 0; j < results.length; j++) {
               
                    if(results[j].duration.value<timemin)
                    {
                      timemin=results[j].duration.value;
                      des=destinationList[j];
                    } ;
              }
            document.getElementById('time').value=timemin;
            document.getElementById('start').value=des;
          }
        });    
        }    
        
//Load the map when the page has finished loading.
google.maps.event.addDomListener(window, 'load', initMap);
</script>

    <input type="submit" class="button" value="submit"/>
   </form>
  </body>