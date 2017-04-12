function initMap() {

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
      '<p><b>Ubicación:</b> 500mts norte del Hospital San Carlos, Alajuela, Costa Rica <br>'  +
       '<b>Teléfono:</b> 2460-0001</p>'+
      '</div>'+
      '</div>';
  var contentString2 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Sucursal San José</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Ubicación:</b>Rotonda de Paso Ancho, San José, Costa Rica<br>'  +
       '<b>Teléfono:</b> 2217-1818</p>'+
      '</div>'+
      '</div>';
  var contentString3 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Sucursal Guápiles</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Ubicación:</b>Frente a CoopeAnde Guápiles<br>'  +
       '<b>Teléfono:</b> 2710-1300</p>'+
      '</div>'+
      '</div>'; 
  var contentString4 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Sucursal Puntarenas</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Ubicación:</b>100 metros oeste del Maxipalí en El Roble de Puntarenas<br>'  +
       '<b>Teléfono:</b> 2105-7900</p>'+
      '</div>'+
      '</div>';    
  var contentString5 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Sucursal Liberia</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Ubicación:</b>Del Maxi Palí, 100 metros este y 100 metros norte.<br>'  +
       '<b>Teléfono:</b> 2666-9900</p>'+
      '</div>'+
      '</div>';    
///****************************************************
 var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

 var infowindow2 = new google.maps.InfoWindow({
    content: contentString2
  });
 var infowindow3 = new google.maps.InfoWindow({
    content: contentString3
  });
  var infowindow4 = new google.maps.InfoWindow({
    content: contentString4
  });
  var infowindow5 = new google.maps.InfoWindow({
    content: contentString5
  });
//***************************************************
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

var marker3 = new google.maps.Marker({
  position: {lat: 10.209346, lng: -83.7873595},
  map:map,
  animation: google.maps.Animation.DROP,
  icon:'./img/logosomb.png',
  title: 'Mi Repuesto Ya / Guápiles'
});
marker3.addListener('click', toggleBounce3);

var marker4 = new google.maps.Marker({
  position: {lat: 9.985222, lng: -84.7391949},
  map:map,
  animation: google.maps.Animation.DROP,
  icon:'./img/logosomb.png',
  title: 'Mi Repuesto Ya / Puntarenas'
});
marker4.addListener('click', toggleBounce4);

var marker5 = new google.maps.Marker({
  position: {lat: 10.6326231, lng: -85.4418111},
  map:map,
  animation: google.maps.Animation.DROP,
  icon:'./img/logosomb.png',
  title: 'Mi Repuesto Ya / Liberia'
});
marker5.addListener('click', toggleBounce5);
//***************************************************
marker.addListener('click', function() {
     zoom: 5;
    infowindow.open(map, marker);
  });
marker2.addListener('click', function() {
    infowindow2.open(map, marker2);
  });
marker3.addListener('click', function() {
    infowindow3.open(map, marker3);
  });
marker4.addListener('click', function() {
    infowindow4.open(map, marker4);
  });
marker5.addListener('click', function() {
    infowindow5.open(map, marker5);
  });
//****************************************************
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
function toggleBounce3() {
  if (marker3.getAnimation() !== null) {
    marker3.setAnimation(null);
  } else {
    marker3.setAnimation(google.maps.Animation.BOUNCE);
  }
}
function toggleBounce4() {
  if (marker4.getAnimation() !== null) {
    marker4.setAnimation(null);
  } else {
    marker4.setAnimation(google.maps.Animation.BOUNCE);
  }
}
function toggleBounce5() {
  if (marker5.getAnimation() !== null) {
    marker5.setAnimation(null);
  } else {
    marker5.setAnimation(google.maps.Animation.BOUNCE);
  }
}

}