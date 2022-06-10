<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="login-container">
            <form class="login" action="login" method="POST">
                <b>Zaloguj się</b>
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach ($messages as $message)  {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="user_name" type="text" placeholder="John Doe">
                <input name="email" type="text" placeholder="email@mail.com">
                <input name="password" type="password" placeholder="password">
                <button type="submit"><i class="fa-solid fa-check"></i></button>
            </form>
        </div>
    </div>
</body>
