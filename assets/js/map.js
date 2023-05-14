/*
Name: Michael Brady
Intermediate Web Programming
Purpose: This web application uses the CodeIgniter framework to display and create news headlines and articles.
*/

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 40.7484, lng: -73.9857},
    zoom: 8,
  });

  let markerOptions = {
      position: new google.maps.LatLng(40.7484, -73.9857),
      map: map,
      label: "Headquarters",
      title: "Our headquarters",
      animation: google.maps.Animation.BOUNCE

  }

  let marker = new google.maps.Marker(markerOptions);

  setTimeout(() => {
      marker.setAnimation(null);
  }, 5000);

  const infoWindowOptions = {
      content: "Producing high quality new reporting from the Empire State Building since 1975",
  }

  const infoWindow = new google.maps.InfoWindow(infoWindowOptions);

  const infoWindowOpenOptions = {
      map: map,
      anchor: marker
  }

  infoWindow.open(infoWindowOpenOptions);

  setTimeout(() => {
      infoWindow.close();
  }, 5000);

}