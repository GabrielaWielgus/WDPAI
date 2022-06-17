<?php
require_once __DIR__.'/../../src/models/Place.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css' rel='stylesheet'>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>

    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/walks.css">
    <script src="https://kit.fontawesome.com/70bd267ff8.js" crossorigin="anonymous"></script>

</head>
<body>
<?php require_once __DIR__.'/../../public/views/sideBar.php'; ?>
    <section class="home">
        <div id='map'></div>
        <div class="add-walk-container">
            <form class="add-walk">
                <li class="walk-adress">
                    <i class="fa-solid fa-pen fa-3x"></i>
                    <label for="geocoder">Adres</label><br>
                    <div id="geocoder" class="geocoder"></div>
                </li>
                <li class="walk-title">
                    <i class="fa-brands fa-pagelines"></i>
                    <label for="title">Tytuł</label><br>
                    <input name="title" type="text" placeholder="Tytuł znacznika">
                </li>
                <li class="description-walk">
                    <i class="fa-solid fa-message fa-3x"></i>
                    <label for="description_walk">Opis spaceru lub miejsca</label><br>
                    <textarea name="description" class="textarea" placeholder="Napisz krótki opis spaceru... Np. Dzisiaj jesteśmy bez smyczy!"></textarea>
                </li>
                <button type="submit"><i class="fa-solid fa-check"></i></button>
            </form>
        </div>
    </section>



<script type="text/javascript" src="./public/js/sideBar.js" defer></script>
<script type="text/javascript" src="./public/js/map.js" defer></script>
</body>
</html>


