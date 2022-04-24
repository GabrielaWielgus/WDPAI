<?php
require_once 'AppController.php';

class DeafultController extends AppController {
    
    public function index(){
        $this->render('login');
    }
    
    public function walks(){
        $this->render('walks');
    }
}