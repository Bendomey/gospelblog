function initMap() {
  //location of uluru
  var uluru = {
    lat: -25.344,
    lng: 131.036
  };
// the map, centered at uluru
var map = new google.maps.Map(
  document.getElementById('map'), {
    zoom: 4,
    center: uluru
  });
// the marker, positioned at uluru
 var marker = new google.maps.marker(
   {position: uluru,
     map: map
   });
}
