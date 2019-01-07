<?php

class Router {
    private $_views;
    private $_ctrl;

    public function routeRequest() {
        try {
            spl_autoload_register(function ($class_name) {
                require_once ('models/' . $class_name . '.php');
            });
            $url = '';
            if(isset($_GET['url'])) {
                $url = explode('/' , filter_var($_GET['url'] , FILTER_SANITIZE_URL));
                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = 'Controller' .$controller;
                $controllerFile = 'controller/'.$controllerClass. '.php';
                if(file_exists($controllerFile)) {
                    require_once($controllerFile);
                    $this->_ctrl = new controllerClass($url);
                }else {
                    throw new Exception('Cette page est introuvable');
                }
            }else {
                require_once ('controller/ControllerAccueil.php');
                $this->_ctrl = new ControllerAccueil($url);
            }

        }catch(Exception $e) {
            $errorRMessage = $e->getMessage();
            require_once('views/viewErrors.php');
        }
    }
}
