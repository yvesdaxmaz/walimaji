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

    let markersLayer = new L.LayerGroup();	//layer contain searched elements
    map.addLayer(markersLayer);

    let controlSearch = new L.Control.Search({
        position:'topright',
        layer: markersLayer,
        initial: false,
        zoom: 12,
        marker: false
    });

    map.addControl( controlSearch );


    /**
     * set users data into the popup of a map's pin
     */
    function setPopupData() {
        try {
            for (let i = 0; i < mapData.length; i++) {
                let marker =new  L.marker( new L.latLng(mapData[i]['latitude'], mapData[i]['longitude']),
                    {icon: icons[tab]}, {title: mapData[i]['name']}
                ).addTo(map);
                marker.properties = {};
                marker.properties.title = mapData[i]['name'];
                marker.properties.loc = mapData[i]['latitude']+","+mapData[i]['longitude'];
                markersLayer.addLayer(marker);

      marker.bindPopup(
                    `<div class="container">
                        <p>${mapData[i]['name']}</p>` +
                        `<p>Details: ${mapData[i]['adresse']}</p>` +
                        `<p>Telephone: ${mapData[i]['telephone']}</p>` +
                        `<div class="row ">
                            <div class="col-lg-2">
                                <a class=" text-light" href="/users/details/${mapData[i]['id']}">Voir Plus</a>
                            </div>` +
                    `       <div class="col-lg-2">
                                <a class=" text-white" onclick="setRoute(${mapData[i]['latitude']},${mapData[i]['longitude']},${userLat},${userLng});" href="#">chemin</a>
                            </div>
                        </div>
                      </div>`);

                console.log( markersLayer);
                console.log(marker.properties.title);
                console.log(marker.properties.loc);


                marker.bindPopup(
                    `<div class="container">
                        <p>${mapData[i]['name']}</p>` +
                    `<p>Details: ${mapData[i]['adresse']}</p>` +
                    `<p>Telephone: ${mapData[i]['telephone']}</p>` +
                    `<div class="row ">
                            <div class="col-lg-2">
                                <a class=" text-light" href="/users/details/${mapData[i]['id']}">Voir Plus</a>
                            </div>` +
                    `       <div class="col-lg-2">
                                <a class=" text-white" onclick="setRoute(${mapData[i]['latitude']},${userLat},${mapData[i]['longitude']},${userLng});" href="#">chemin</a>
                            </div>
                        </div>
                      </div>`
                );
            }
        } catch (e) {
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
     * add a street on the map
     */
    let addStreets = () => {
        for (let i = 0; i < streets.length; i++) {
            let polyline = L.polyline(
                stringToGeoPoints(
                    streets[i]['geolocations']),
                {color: 'red'}
            ).addTo(map);
            polyline.bindPopup("<b>" + streets[i]['name']);
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


    /**
     * set a route between two points
     */

    $(document).ready(function () {

        setRoute = function (lat1, lat2, long1, long2) {

            L.Routing.control({
                waypoints: [
                    L.latLng(lat1, long1),
                    L.latLng(lat2, long2)
                ],
                createMarker: function () {
                    return null;
                },
                addWaypoints: false,
                draggableWaypoints: false,
            }).addTo(map);
        }
    });
}


getLocation();




