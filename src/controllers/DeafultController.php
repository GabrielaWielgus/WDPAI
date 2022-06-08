<?php
require_once 'AppController.php';

class DeafultController extends AppController {
    
    public function index(){
        $this->render('login');
    }
    
    public function walks(){
        $this->render('walks');
    }

    public function dogs(){
        $this->render('dogs');
    }

    public function add_dog(){
        $this->render('add_dog');
    }

    public function settings(){
        $this->render('settings');
    }
}