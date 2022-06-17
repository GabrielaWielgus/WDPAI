<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';


class SecurityController extends AppController
{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        $sessionControl = new SessionController();

        if (!$this->isPost()) {
            return $this->render('login');
        }
        $email = $_POST["email"];
        $password = $_POST['password'];
        $user_name = $_POST["user_name"];

        $user = $this->userRepository->getUser($email);
        $password_to_verify = $user->getPassword();
        if(!$user){
            return $this->render('login', ['messages' => ['User not exist']]);
        }
        if ($user->getUserName() !== $user_name){
            return $this->render('login', ['messages' => ['Wrong user name']]);
        }
        if ($user->getEmail() !== $email){
            return $this->render('login', ['messages' => ['User with this email not exist']]);
        }
        if (!password_verify($password,$password_to_verify)){
            return $this->render('login', ['messages' => ['Wrong password']]);
        }

        $sessionControl->setCookie($user->getEmail());

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/walks");

    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_name = $_POST["user_name"];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }

        $user = new User($email, password_hash($password,PASSWORD_DEFAULT), $user_name, $name, $surname);
        $user->setPhone($phone);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }
    public function logout()
    {
        $sessionControl = new SessionController();
        $sessionControl->deleteCoockieInDatabase();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/");
    }
}