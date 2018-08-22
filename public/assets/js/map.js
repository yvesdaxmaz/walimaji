/**
 * icons for different user type
 * @type {{currentUser: *|Ye, traders: *|Ye, transformers: *|Ye, providers: *|Ye, producers: *|Ye}}
 */
let icons = {
    currentUser: new L.Icon({
        iconUrl: 'http://127.0.0.1:8000/assets/leaflet/dist/images/violet.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [41, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -32],
        shadowSize: [41, 51]
    }),

    trader: new L.Icon({
        iconUrl: 'http://127.0.0.1:8000/assets/leaflet/dist/images/green.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [41, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -32],
        shadowSize: [41, 51]
    }),

    transformer: new L.Icon({
        iconUrl: 'http://127.0.0.1:8000/assets/leaflet/dist/images/red.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [41, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -32],
        shadowSize: [41, 51]
    }),

    provider: new L.Icon({
        iconUrl: 'http://127.0.0.1:8000/assets/leaflet/dist/images/yellow.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [41, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -32],
        shadowSize: [41, 51]
    }),

    producer: new L.Icon({
        iconUrl: 'http://127.0.0.1:8000/assets/leaflet/dist/images/blue.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [41, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -32],
        shadowSize: [41, 51]
    })
};


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

    console.log(userLat, userLng);
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
        try {
            for (let i = 0; i < mapData.length; i++) {
                let marker = L.marker(
                    [mapData[i]['latitude'], mapData[i]['longitude']],
                    {icon: icons[tab]}
                ).addTo(map);

                marker.bindPopup(
                    `<b>${mapData[i]['name']}</b>` +
                    `<br>Details: ${mapData[i]['adresse']}` +
                    `<br />Telephone: ${mapData[i]['telephone']}` +
                    `<br /><a href="#">Voir Plus</a>`
                );
            }
        } catch(e) {
            console.warn(e);
        }
    }


    /**
     * add the current user location to the map
     */
    let addCurrent = () => {
        let marker = L.marker(
            [userLat, userLng],
            {icon: icons.currentUser}
        ).addTo(map);

        marker.bindPopup("Vous");
    };


    /**
     * draw an areas on the map
     */
    let addAreas = () => {
        for (let i = 0; i < areas.length; i++) {
            let polygon = L.polygon(
                stringToGeoPoints(
                    polygon[i]['geolocations']),
                    {color: 'red'}
                ).addTo(map);
            polygon.bindPopup("<b>" + polygon[i]['name']);
        }
    };




    /**
     * convert a string to a geoPoint.
     * @param geo
     * @returns {Array}
     */
    let stringToGeoPoints = (geo) => {
        let linesPin = geo.split(",");

        let linesLat = [];
        let linesLng = [];

        for (i = 0; i < linesPin.length; i++) {
            if (i % 2) {
                linesLat.push(linesPin[i]);
            } else {
                linesLng.push(linesPin[i]);
            }
        }

        let latLngLine = [];

        for (let i = 0; i < linesLng.length; i++) {
            latLngLine.push(L.latLng(linesLat[i], linesLng[i]));
        }

        return latLngLine;
    };

    /**
     * lead pin on the map when the document is loaded.
     */
    $(document).ready(function () {
        addCurrent();
        setPopupData();
    });

}


getLocation();
