<?php

require_once 'src/controllers/DeafultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/AddDogController.php';
require_once 'src/controllers/WalksController.php';
require_once 'src/controllers/SessionController.php';
require_once 'src/controllers/PermissionController.php';

class Router {
    
    public static $routes;

    public static function get($url, $controller){
        self::$routes[$url] = $controller;
    }

    public static function post($url, $controller){
        self::$routes[$url] = $controller;
    }

    public static function run($url){
        $sessionControl = new SessionController();

        $perimsionControll = new permissionController();

        //Sprawdzenie czy użytkownik jest zalogowany, jeśli nie to przeniesienie go na stronę logowania
        if(!$sessionControl->checkCookieWithDatabase()){
            $url = "login";
        }elseif ($url === 'login'){
            $url = '';
        }

        if($url==='adminPanel' and !$perimsionControll->isUserAdmin()){
            $url = 'errorPage';
        }

        $action = explode("/", $url)[0];
        if (!array_key_exists($action, self::$routes)) {
            $url = "errorPage";
            $action = explode("/", $url)[0];
        }

        $controller = self::$routes[$action];
        $object = new $controller;
        $action = $action ?: 'index';

        $object->$action();
    }
}