<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/add_dog.css">

    <script src="https://kit.fontawesome.com/70bd267ff8.js" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once __DIR__.'/../../public/views/sideBar.php'; ?>
<section class="home">
    <div class="add-dog-container">
        <form class="add-dog" action="addDog" method="POST" ENCTYPE="multipart/form-data">
            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <li class="name-dog-input">
                <i class="fa-solid fa-pen"></i>
                <label for="dog_name">Imię psa</label><br>
                <input name="dog_name" type="text" placeholder="Kira">
            </li>
            <li class="breed-dog">
                <i class="fa-solid fa-user"></i>
                <label for="breed">Rasa</label><br>
                <input type="text" id="breed" name="breed" placeholder="Kundel">
            </li>
            <li class="gender-dog">
                <i class="fa-solid fa-mars-and-venus"></i>
                <label for="gender">Płeć</label><br>
                <input type="text" id="gender" name="gender" placeholder="Suczka">
            </li>
            <li class="description-dog">
                <i class="fa-solid fa-message"></i>
                <label for="description">Opis</label><br>
                <textarea class="textarea" name="description" placeholder="Napisz krótki opis swojego psiaka..."></textarea>
            </li>

            <input type="file" name="file"/><br/>

            <button type="submit"><i class="fa-solid fa-check"></i></button>
        </form>
    </div>
</section>
<script type="text/javascript" src="./public/js/sideBar.js" defer></script>
</body>
</html>



