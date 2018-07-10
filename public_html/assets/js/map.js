"use strict";
var isClicked = false;
function initialize()
{
  var stylez = [
    {
      "featureType": "landscape",
      "elementType": "geometry",
      "stylers": [
        { "weight": 0.1 },
        { "saturation": -15 },
        { "lightness": 38 },
        { "hue": "#0055ff" },
        { "gamma": 1.91 },
        { "visibility": "on" },
        { "color": "#f7f6f7" }
      ]
    },{
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
        { "color": "#c3c3c3" }
      ]
    },{
      "featureType": "road.highway",
      "elementType": "geometry",
      "stylers": [
        { "color": "#f4f4f2" }
      ]
    },{
      "featureType": "road.highway",
      "elementType": "labels.text.fill",
      "stylers": [
        { "visibility": "on" },
        { "color": "#080202" }
      ]
    },{
      "featureType": "road.highway",
      "elementType": "labels.text.stroke",
      "stylers": [
        { "color": "#f4f4f6" }
      ]
    },{
      "featureType": "road.arterial",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#020101" }
      ]
    },{
      "featureType": "road.arterial",
      "elementType": "labels.text.stroke",
      "stylers": [
        { "color": "#ffffff" }
      ]
    },{
      "featureType": "road.arterial",
      "elementType": "geometry.stroke",
      "stylers": [
        { "color": "#d2d2d2" },
        { "lightness": -10 }
      ]
    },{
      "featureType": "landscape",
      "stylers": [
        { "color": "#f6f6f6" }
      ]
    },{
      "featureType": "road.local",
      "elementType": "geometry",
      "stylers": [
        { "visibility": "simplified" },
        { "color": "#d2d2d2" }
      ]
    },{
    },{
      "featureType": "road.local",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#040c06" }
      ]
    },{
      "featureType": "transit.station",
      "elementType": "labels.text.fill",
      "stylers": [
        { "visibility": "on" },
        { "color": "#1d080f" }
      ]
    },{
      "featureType": "water",
      "stylers": [
        { "color": "#b8b7b7" },
        { "hue": "#005eff" },
        { "saturation": 41 }
      ]
    },{
      "featureType": "administrative",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#080621" }
      ]
    },{
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#010201" }
      ]
    },{
      "featureType": "road",
      "elementType": "labels.icon",
      "stylers": [
        { "hue": "#0800ff" },
        { "saturation": -82 },
        { "gamma": 0.32 }
      ]
    },{
      "featureType": "transit.station",
      "elementType": "labels.icon",
      "stylers": [
        { "hue": "#2a00ff" },
        { "saturation": -44 },
        { "lightness": 3 },
        { "gamma": 0.33 },
        { "weight": 0.1 }
      ]
    },{
    }
    ]
   
  var coordLat = 51.492267;
  var coordLng = 3.898867 ;
  var delta
  if( jQuery(window).width() < 756 )
  {
    delta = 0;
  }  
  var point = new google.maps.LatLng(coordLat,coordLng);
  var center = new google.maps.LatLng(coordLat,coordLng);  
  var mapOptions = {  
    zoom: 14,
    center: center,
    scrollwheel: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

  var styledMapOptions = {
      name: "gray-style"
  }
  var jayzMapType = new google.maps.StyledMapType(
      stylez, styledMapOptions);
  map.mapTypes.set('graystyle', jayzMapType);
  map.setMapTypeId('graystyle');
  var marker = new google.maps.Marker({
    map: map,
    position: point,
      icon:image
  });

  google.maps.event.addListener(marker, 'click', function () {

      map.panTo(point);
    
  });
  map.panTo(point);
 
}
$(document).ready(function () {
    if (document.getElementById('map')) {

        google.maps.event.addDomListener(window, 'load', initialize);
    }
});



