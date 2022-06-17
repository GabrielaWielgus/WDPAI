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
    coordinates = e.result.center//tablica [,] koordynatow
    console.log(coordinates)
    document.querySelector('.add-walk').addEventListener('submit', e =>{
        e.preventDefault();
        let form = document.querySelector('.add-walk');
        const data = new URLSearchParams();
        for(const p of new FormData(form)){
            data.append(p[0],p[1]); //dodanie koordynatów zmienna coordinates?
        }
        fetch("/add_place",{
            method:"POST",
            body: data
        }).then(response => response.text()).then(response => {
            console.log(response);
        }).catch(error => console.log(error));
    });
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
