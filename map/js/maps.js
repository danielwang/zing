/*  -------------------------------------\
  TuneUp Nov 2015
  Author: Daniel Wang
\----------------------------------------*/


/*  Google map setup
----------------------------------------*/
var map, terminator, zoomlevel, lat, lng;
var markers = [];
var currentLength = 0;
zoomlevel = getZoomLevel().level;
lat = getZoomLevel().lat;
lng = getZoomLevel().lng;
// console.log( zoomlevel + " " + lat + " " + lng);

var locations = [
     [0, 0],
     [25, 160],
     [0, 100],
     [46, 0],
     [31, -97]
];

var index = 0;


function initMap() {
    var customMapType = new google.maps.StyledMapType([{

        stylers: [{
            hue: '#25a2d1'
        }, {
            visibility: 'on'
        }, {
            gamma: 0.5
        }, {
            weight: 0.5
        }]
    }, {
        elementType: 'labels',
        stylers: [{
            visibility: 'off'
        }]

    }, {
        featureType: 'water',
        stylers: [{
            color: '#0D6083'
        }]
    }], {
        name: 'Custom Style'
    });
    var customMapTypeId = 'custom_style';

    map = new google.maps.Map(document.getElementById('map-canvas'), {
        scrollwheel: false,
        mapTypeControl: false,
        panControl: false,
        zoomControl: false,
        scaleControl: false,
        overviewMapControl: false,
        streetViewControl: false,
        zoom: zoomlevel,
        center: {
            lat: lat,
            lng: lng
        },
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.TERRAIN, customMapTypeId]
        }

    });

    map.mapTypes.set(customMapTypeId, customMapType);
    map.setMapTypeId(customMapTypeId);

    var terminator_options = {
        map: map,
        shade: true,
        boundary: false
    }

    terminator = new GST.Terminator(terminator_options);
    var date = new Date()
    terminator.set(date);
    Updater();
    AddMakers();

    setInterval(function() {
        console.log('index: ' + index);
        var nlat = locations[index][0];
        var nlng = locations[index][1];
        var nextLatlng = new google.maps.LatLng(nlat, nlng);
        map.panTo(nextLatlng);  
        index = (index + 1) % locations.length;  
        console.log('index2: ' + index);
    }, 5000);
}


window.onload = initMap;

// add markers on map
function AddMakers(){
  /* var json = (function() {
        var json = null;
        $.ajax({
            'async': false,
            'global': false,
            'url': "js/markers.json",
            'dataType': "json",
            'success': function(data) {
                json = data;
            }
        });
        return json;
    })();


    //loop between each of the json elements
   for (var i = 0, length = json.length; i < length; i++) {
        var data = json[i],
        latLng = new google.maps.LatLng(data.lat, data.lng);
        addMarkerWithTimeout(latLng, i * 200);
    }*/
   /* ****************************************************/
     var bounds = {
        north: 180,
        south: -180,
        east: 180,
        west: -180
      };

    for (var i = 0; i < 110; i++) {
       var ptLat = Math.random() * (bounds.north - bounds.south) + bounds.south;
       var ptLng = Math.random() * (bounds.east - bounds.west) + bounds.west;
       var pins = new google.maps.LatLng(ptLat,ptLng);
       addMarkerWithTimeout(pins, i * 200);
    } 
    /* ****************************************************/
   // console.log('marker no.: ' + markers.length);
}

function addMarkerWithTimeout(latLng, timeout) {
    window.setTimeout(function() {
        markers.push(new MarkerWithLabel({
            position: latLng,
            icon: 
            {
             path: google.maps.SymbolPath.CIRCLE,
             scale: 0, //tamaño 0
            },
            map: map,
            draggable: false,
            labelAnchor: new google.maps.Point(10, 10),
            labelClass: "label", // the CSS class for the label
        }));
      //  console.log('adding: ' + markers.length);
         //console.log('marker length: ' + markers.length);
        if (markers.length >100) {
            
            clearMarkers();
        }
    }, timeout); 

}
// remove the old markers from the map

function clearMarkers() {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
    console.log('removing: ' + markers.length);
  }
  markers=[];
}


function Updater() {
    var date = new Date()
    terminator.update(date);
    window.setTimeout("Updater();", 60000);
}

function getZoomLevel() {
    var viewportWidth = $(window).width();
    var viewportHeight = $(window).height();
    if (viewportWidth > 1600) {
        level = 3;
        lat = 10;
        lng = 26;
    } else {
        level = 2;
        lat = 25;
        lng = 26
    }
    return {
        level: level,
        lat: lat,        
        lng: lng
    }; 
}


