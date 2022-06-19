<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/settings_dog.css">


    <script src="https://kit.fontawesome.com/70bd267ff8.js" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once __DIR__.'/../../public/views/sideBar.php'; ?>
<section class="home">
    <div class="edit-dog-container">
        <form class="edit-dog">
            <!-- TODO: picture of dog -->
            <li class="name-dog-input">
                <i class="fa-solid fa-pen"></i>
                <label for="fname">Edytuj imię psa</label><br>
                <input type="text" id="fname" name="fname" placeholder="Kira">
            </li>
            <li class="breed-dog">
                <i class="fa-solid fa-user"></i>
                <label for="fbreed">Edytuj rasę</label><br>
                <input type="text" id="fbreed" name="fbreed" placeholder="Kundel">
            </li>
            <li class="gender-dog">
                <i class="fa-solid fa-mars-and-venus"></i>
                <label for="fgender">Edytuj płeć</label><br>
                <input type="text" id="fgender" name="fgender" placeholder="Suczka">
            </li>
            <li class="description-dog">
                <i class="fa-solid fa-message"></i>
                <label for="fdescription">Edytuj opis</label><br>
                <textarea class="textarea" placeholder="Napisz krótki opis swojego psiaka..."></textarea>
            </li>
            <button2 type="submit"><i class="fa-solid fa-check"></i></button2>
        </form>
    </div>
</section>



<script type="text/javascript" src="./public/js/sideBar.js" defer></script>
</body>
</html>



