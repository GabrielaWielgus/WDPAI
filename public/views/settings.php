<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/settings.css">

    <script src="https://kit.fontawesome.com/70bd267ff8.js" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once __DIR__.'/../../public/views/sideBar.php'; ?>
<section class="home">
    <div class="card-wrapper">
        <div class="card">
                <div class="card1-image"></div>
                <div class="card-text">
                    <a href="http://localhost:8080/settings_owner" style="text-decoration:none">Ustawienia właściciela</a>
                </div>
        </div>
        <div class="card">
            <div class="card2-image"></div>
            <div class="card-text">
                <a href="http://localhost:8080/settings_dog" style="text-decoration:none">Ustawienia psa</a>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="./public/js/sideBar.js" defer></script>
</body>
</html>




