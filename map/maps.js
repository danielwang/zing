/*  -------------------------------------\
  TuneUp Nov 2015
  Author: Daniel Wang
\----------------------------------------*/

/*  Google map setup
----------------------------------------*/
var map, terminator;
var markers = [];
var currentLength = 0;

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
        zoom: 2,
        center: {
            lat: 20,
            lng: 26
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
    RemoveOld();
}


window.onload = initMap;

// add markers on map
function AddMakers(){
  var json = (function() {
        var json = null;
        $.ajax({
            'async': false,
            'global': false,
            'url': "markers.json",
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
        var marker = new MarkerWithLabel({
            position: latLng,
            icon: //'markers/ApplicantwaveP.gif',
            {
             path: google.maps.SymbolPath.CIRCLE,
             scale: 0, //tamaño 0
            },
            map: map,
            draggable: false,
            labelAnchor: new google.maps.Point(10, 10),
            labelClass: "label", // the CSS class for the label
        });
        markers.push(marker);
    }

   // window.setTimeout(AddMakers, 2000);

}

// remove the old markers from the map
function RemoveOld() {

    console.log('markers num: ' + currentLength);
    

     if (currentLength > 0){
       for( var i = currentLength; i >= 0;  i--){
                 if (typeof markers[i] === "undefined") {
  //            //check array hasn't died
         } else {
          console.log('removing' + i);
          markers[i].setMap(null);
          markers = markers.splice(i);
       }
     }
  }
  //   console.log('removing now');
    currentLength = markers.length;

   // window.setTimeout(RemoveOld, 2500);
}



function Updater() {
    var date = new Date()
    terminator.update(date);
    window.setTimeout("Updater();", 60000);
}

