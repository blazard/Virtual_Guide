<!DOCTYPE html>
<html>
  <head>
    <title>Distance Matrix service</title>
    <style>
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
        width: 50%;
      }
      #right-panel {
        float: right;
        width: 48%;
        padding-left: 2%;
      }
      #output {
        font-size: 11px;
      }
    </style>
  </head>
  <body>
    <div id="right-panel">
      <div id="inputs">
        <pre>
var origin1 = {lat: 55.930, lng: -3.118};
var origin2 = 'Greenwich, England';
var destinationA = 'Stockholm, Sweden';
var destinationB = {lat: 50.087, lng: 14.421};
        </pre>
      </div>
      <div>
        <strong>Results</strong>
      </div>
      <div id="output"></div>
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var bounds = new google.maps.LatLngBounds;

        var origin1 = {lat: 29.9613048, lng: 76.8230712};
        var destinationA = {lat: 29.966049, lng: 76.834121};

        var service = new google.maps.DistanceMatrixService;
        service.getDistanceMatrix({
          origins: [origin1],
          destinations: [destinationA],
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

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2yF6Z6tsC7DPcHJ01UjggwVE2UFX7iGY&callback=initMap">
    </script>
  </body>
</html>