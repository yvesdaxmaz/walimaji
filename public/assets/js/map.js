/**
 * create a greenIcon for the active located user.
 * @type {*}
 */
var greenIcon = new L.Icon({
    iconUrl: 'http://127.0.0.1:8000/assets/leaflet/dist/images/green.png',
    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    iconSize: [41, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -32],
    shadowSize: [41, 51]
});


/**
 * get location of the current active user.
 */
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        document.getElementById("map").innerHTML = "Geolocation is not supported by this browser.";
    }
}


/**
 * render the map with the current active user and other users type requested.
 * @param position
 */
function showPosition(position) {

    let userLat = position.coords.latitude;
    let userLng = position.coords.longitude;
    let map = L.map('map').setView([userLat, userLng], 12);


    L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2FteW13YW1iYSIsImEiOiJjamtnd2FlbDE1M2l5M3dtbGY1Z2wzbzJjIn0.7dqO-EqSJpSyxyUniLkUNQ', {
        maxZoom: 18,
        attribution: `Map data &copy; <a href="http://openstreetmap.org/"> OpenStreetMap </a> contributors, <a href="http://creativecommons.org/"> CC-BY-SA </a>, Imagery © <a href="http://mapbox.com">Mapbox</a>`,
        id: 'map'
    }).addTo(map);


    /**
     * set users data into the popup of a map's pin
     */
    function setPopupData() {
        for (let i = 0; i < mapData.length; i++) {
            let marker = L.marker(
                    [mapData[i]['latitude'], mapData[i]['longitude']],
                    {color: 'red'}
                ).addTo(map);

            marker.bindPopup(
                `<b>${mapData[i]['name']}</b>` +
                `<br>Details: ${mapData[i]['adresse']}` +
                `<br />Telephone: ${trader[i]['telephone']}` +
                `<br /><a href="#">Voir Plus</a>`
            );
        }
    }


    function addAreas() {
        for (var i = 0; i < areas.length; i++) {
            var polygon = L.polygon(stringToGeoPoints(polygon[i]['geolocations']), {color: 'red'}).addTo(map);
            polygon.bindPopup("<b>" + polygon[i]['name']);
        }
    }


    function addStreets() {
        for (var i = 0; i < streets.length; i++) {
            var polyline = L.polyline(stringToGeoPoints(streets[i]['geolocations']), {color: 'red'}).addTo(map);
            polyline.bindPopup("<b>" + streets[i]['name']);
        }
    }


    function stringToGeoPoints(geo) {
        var linesPin = geo.split(",");

        var linesLat = new Array();
        var linesLng = new Array();

        for (i = 0; i < linesPin.length; i++) {
            if (i % 2) {
                linesLat.push(linesPin[i]);
            } else {
                linesLng.push(linesPin[i]);
            }
        }

        var latLngLine = new Array();

        for (i = 0; i < linesLng.length; i++) {
            latLngLine.push(L.latLng(linesLat[i], linesLng[i]));
        }

        return latLngLine;
    }

    $(document).ready(function () {
        setPopupData();
    });


}
getLocation();