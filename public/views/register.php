<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/register.css">
    <script src="https://kit.fontawesome.com/70bd267ff8.js" crossorigin="anonymous"></script>

    <title>REGISTER</title>
</head>

<body>
<div class="login-page">
    <a href="http://localhost:8080/login" style="text-decoration: none">
        <i class="fa-solid fa-arrow-right-to-bracket"></i>
    </a>
</div>
<div class="container">
    <div class="logo">
        <img src="public/img/logo.svg">
    </div>
    <div class="login-container">
        <form class="register" action="register" method="POST">
            <b>Zarejestruj się</b>
            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach ($messages as $message)  {
                        echo $message;
                    }
                }
                ?>
            </div>
            <input name="user_name" type="text" placeholder="Nazwa użytkownika*">
            <input name="email" type="text" placeholder="email@mail.com*">
            <input name="password" type="password" placeholder="Hasło*">
            <input name="confirmedPassword" type="password" placeholder="Powtórz hasło*">
            <input name="name" type="text" placeholder="Imię*">
            <input name="surname" type="text" placeholder="Nazwisko*">
            <input name="phone" type="text" placeholder="Telefon">
            <div class="text">
                <h3>Masz już konto? <a href="http://localhost:8080/login">Zaloguj</a></h3>
            </div>
            <button type="submit"><i class="fa-solid fa-check"></i></button>
        </form>
    </div>
</div>
</body>