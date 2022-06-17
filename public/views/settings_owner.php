<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/settings_owner.css">


    <script src="https://kit.fontawesome.com/70bd267ff8.js" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once __DIR__.'/../../public/views/sideBar.php'; ?>
<section class="home">
    <?php
    if(isset($messages)){
        foreach ($messages as $message)  {
            echo $message;
        }
    }
    ?>
    <div class="add-dog-container">
        <form class="edit-owner">
            <li class="name-owner-input">
                <i class="fa-solid fa-pen"></i>
                <label for="fname">Edytuj nazwę</label><br>
                <input name="user_name" type="text" placeholder="John Doe">
            </li>
            <li class="email-owner">
                <i class="fa-solid fa-user"></i>
                <label for="femail">Edytuj email</label><br>
                <input name="email" type="text" placeholder="email@mail.com">
            </li>
            <li class="password">
                <i class="fa-solid fa-key"></i>
                <label for="fpassword">Edytuj hasło</label><br>
                <input name="password" type="text" placeholder="password">
            </li>
            <div class="messages">
            </div>
            <button2 type="submit"><i class="fa-solid fa-check"></i></button2>
        </form>
    </div>
</section>

<script type="text/javascript" src="./public/js/sideBar.js" defer></script>
</body>
</html>



