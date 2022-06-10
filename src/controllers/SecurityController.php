<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController
{
    public function login()
    {
        $user = new User('johnsnow@gmail.com', 'admin','John123','John', 'Snow');

        if (!$this->isPost()) {
            return $this->render('login');
        }
        
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user_name = $_POST["user_name"];

        if ($user->getUserName() !== $user_name){
            return $this->render('login', ['messages' => ['Wrong user name']]);
        }
        if ($user->getEmail() !== $email){
            return $this->render('login', ['messages' => ['User with this email not exist']]);
        }
        if ($user->getPassword() !== $password){
            return $this->render('login', ['messages' => ['Wrong password']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/walks");

    }
}