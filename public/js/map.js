mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FicmllbGF3aWVsZ3VzIiwiYSI6ImNsNGlnZjh6ZDBnOGYzcHF2NXN2bTBkdm8ifQ.8r9mjByzQxPl-KMMGyb-QA';

const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [19.94497998,50.0646501],
    zoom: 13
});
const geocoder = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken,
    mapboxgl: mapboxgl
});

document.getElementById('geocoder').appendChild(geocoder.onAdd(map));


geocoder.on('result', function(e) {
    console.log(e.result.center)
    //w tym miejscu mam coordynaty wprowadzone w search -> dodać do bazy danych jako place
})

fetch("/places", {
    method: "GET",
}).then(function(response){
    return response.json();
}).then(function(places){
    places.map(place => {
        place.coordinates = JSON.parse(place.coordinates);
    })
    displayPlaces(places);
});

function displayPlaces(places) {
    for (const feature of places) {
        const el = document.createElement('div');
        el.className = 'marker';

        new mapboxgl.Marker(el)
            .setLngLat(feature.coordinates.point)
            .setPopup(
                new mapboxgl.Popup({offset: 25}) // add popups
                    .setHTML(
                        `<h3>${feature.title}</h3><p>${feature.description}</p>`
                    )
            )
            .addTo(map);
    }
}
