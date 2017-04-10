function initMap() {
  var myLatLng = {lat: 10.3506949, lng: -84.4346537};
  
  var myLatLng2 = {lat: 9.9117476, lng: -84.0782297};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: myLatLng2
  });

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Sucursal San Carlos</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Ubicacion:</b> 500mts norte del Hospital San Carlos, Alajuela, Costa Rica <br>'  +
       '<b>Teléfono:</b> 24-60-00-01</p>'+
      '</div>'+
      '</div>';
  var contentString2 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Sucursal San José</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Ubicacion:</b>Rotonda de Paso Ancho, San José, Costa Rica<br>'  +
       '<b>Teléfono:</b> 22-17-18-18</p>'+
      '</div>'+
      '</div>';    

 var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

 var infowindow2 = new google.maps.InfoWindow({
    content: contentString2
  });

var marker = new google.maps.Marker({
    position: {lat: 10.3506949, lng: -84.4346537},
    map: map,
    animation: google.maps.Animation.DROP,
    icon: './img/logosomb.png',
    title: 'Mi Repuesto Ya / San Carlos'
  });
 marker.addListener('click', toggleBounce);


var marker2 = new google.maps.Marker({
  position: {lat: 9.9117476, lng: -84.0782297},
  map:map,
  animation: google.maps.Animation.DROP,
  icon:'./img/logosomb.png',
  title: 'Mi Repuesto Ya / San José'
});
marker2.addListener('click', toggleBounce2);

marker.addListener('click', function() {
     zoom: 5;
    infowindow.open(map, marker);
  });
marker2.addListener('click', function() {
    infowindow2.open(map, marker2);
  });

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
function toggleBounce2() {
  if (marker2.getAnimation() !== null) {
    marker2.setAnimation(null);
  } else {
    marker2.setAnimation(google.maps.Animation.BOUNCE);
  }
}
  
}