/**
 * Created by itot on 08/08/2018.
 */


    var map1 = L.map('map1').setView([-11.66494,27.4837274], 13);
    L.tileLayer( 'https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2FteW13YW1iYSIsImEiOiJjamtnd2FlbDE1M2l5M3dtbGY1Z2wzbzJjIn0.7dqO-EqSJpSyxyUniLkUNQ', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org/"> OpenStreetMap </a> contributors, ' +
        '<a href="http://creativecommons.org/"> CC-BY-SA </a>, ' +
        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        id: 'examples.map-i875mjb7'
    }).addTo(map1);


    $( document ).ready(function() {
        addTraders();
        addProducer();
        addProviders();
        addTransformers();

    });


    var map2 = L.map('map2').setView([-11.66494,27.4837274], 13);
    L.tileLayer( 'https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2FteW13YW1iYSIsImEiOiJjamtnd2FlbDE1M2l5M3dtbGY1Z2wzbzJjIn0.7dqO-EqSJpSyxyUniLkUNQ', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org/"> OpenStreetMap </a> contributors, ' +
        '<a href="http://creativecommons.org/"> CC-BY-SA </a>, ' +
        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        id: 'examples.map-i875mjb7'
    }).addTo(map2);





    var map3 = L.map('map3').setView([-11.66494,27.4837274], 13);
    L.tileLayer( 'https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2FteW13YW1iYSIsImEiOiJjamtnd2FlbDE1M2l5M3dtbGY1Z2wzbzJjIn0.7dqO-EqSJpSyxyUniLkUNQ', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org/"> OpenStreetMap </a> contributors, ' +
        '<a href="http://creativecommons.org/"> CC-BY-SA </a>, ' +
        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        id: 'examples.map-i875mjb7'
    }).addTo(map3);




    var map4 = L.map('map4').setView([-11.66494,27.4837274], 13);
    L.tileLayer( 'https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2FteW13YW1iYSIsImEiOiJjamtnd2FlbDE1M2l5M3dtbGY1Z2wzbzJjIn0.7dqO-EqSJpSyxyUniLkUNQ', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org/"> OpenStreetMap </a> contributors, ' +
        '<a href="http://creativecommons.org/"> CC-BY-SA </a>, ' +
        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        id: 'examples.map-i875mjb7'
    }).addTo(map4);







function addTraders() {

    for(var i=0; i < trader.length; i++) {

        var marker = L.marker( [trader[i]['latitude'], trader[i]['longitude']], { color: 'red'} ).addTo(map1);
        marker.bindPopup( "<b>" + trader[i]['name'] + "</b><br>Details:" + trader[i]['adresse'] + "<br />Telephone: " + trader[i]['telephone']+ '<br /><a href=" ">Voir Plus</a>');

    }
}
function addProducer() {

    for(var i=0; i < producer.length; i++) {

        var marker = L.marker( [producer[i]['latitude'], producer[i]['longitude']] ).addTo(map2);
        marker.bindPopup( "<b>" + producer[i]['name'] + "</b><br>Details:" + producer[i]['adresse'] + "<br />Telephone: " + producer[i]['telephone']);

    }
}
function addProviders() {

    for(var i=0; i < provider.length; i++) {

        var marker = L.marker( [provider[i]['latitude'], provider[i]['longitude']] ).addTo(map3);
        marker.bindPopup( "<b>" + provider[i]['name'] + "</b><br>Details:" + provider[i]['adresse'] + "<br />Telephone: " + provider[i]['telephone']);

    }
}
function addTransformers() {

    for(var i=0; i < transformer.length; i++) {

        var marker = L.marker( [transformer[i]['latitude'], transformer[i]['longitude']] ).addTo(map4);
        marker.bindPopup( "<b>" + transformer[i]['name'] + "</b><br>Details:" + transformer[i]['adresse'] + "<br />Telephone: " + transformer[i]['telephone']);

    }
}

function addAreas() {
    for(var i=0; i <areas.length; i++) {
        var polygon = L.polygon( stringToGeoPoints( polygon[i]['geolocations']), { color: 'red'}).addTo(map);
        polygon.bindPopup( "<b>" + polygon[i]['name'] );
    }
}


function addStreets() {
    for(var i=0; i <streets.length; i++) {
        var polyline = L.polyline( stringToGeoPoints( streets[i]['geolocations']), { color: 'red'}).addTo(map);
        polyline.bindPopup( "<b>" + streets[i]['name']);
    }
}


function stringToGeoPoints(geo) {
    var linesPin = geo.split(",");

    var linesLat = new Array();
    var linesLng = new Array();

    for(i=0; i<linesPin.length;i++) {
        if(i % 2) {
            linesLat.push(linesPin[i]);
        }else{
            linesLng.push(linesPin[i]);
        }
    }

    var latLngLine = new Array();

    for(i=0; i < linesLng.length; i++) {
        latLngLine.push( L.latLng( linesLat[i], linesLng[i]));
    }

    return latLngLine;
}
$( document ).ready(function() {

    addTraders();
    addProducer();
    addProviders();
    addTransformers();

});

