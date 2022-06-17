<?php
require_once 'AppController.php';

class DeafultController extends AppController {
    
    public function index(){
        $this->render('login');
    }
    
    public function walks(){
        $this->render('walks');
    }

    public function addDog(){
        $this->render('addDog');
    }

    public function settings(){
        $this->render('settings');
    }
    public function settings_owner(){
        $this->render('settings_owner');
    }
    public function settings_dog(){
        $this->render('settings_dog');
    }
    public function register(){
        $this->render('register');
    }
}