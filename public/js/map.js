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

let Coordinates = {point:['','']}

geocoder.on('result', function(e) {
    let coordinates = e.result.center//tablica [,] koordynatow
    console.log(coordinates)
    Coordinates.point = [coordinates[0],coordinates[1]]
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


document.querySelector('.add-walk').addEventListener('submit', e =>{
    e.preventDefault();
    let form = document.querySelector('.add-walk');
    const data = {
        title:"",
        description:"",
        coordinates: Coordinates
    };
    for(const p of new FormData(form)){
        console.log(p)
        data[p[0]]=p[1]
    }
    console.log(data)
    let formData = new FormData();
    formData.append('title', data.title);
    formData.append('description', data.description);
    formData.append('coordinates', JSON.stringify(data.coordinates));

    fetch("/add_place",{
        method:"POST",
        body: formData
    }).then(response => response.text()).then(response => {
        console.log(response);
    }).catch(error => console.log(error));
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
