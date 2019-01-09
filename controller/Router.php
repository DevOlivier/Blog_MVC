<?php

class Router {
    private $_view;
    private $_ctrl;

    public function routeRequest() {
        try {
            spl_autoload_register(function ($class) {
                require_once ('models/' . $class . '.php');
            });
            $url = '';
            if(isset($_GET['url'])) {
                //explode permet  de récupérer tous les paramètres séparées d'une url
                $url = explode('/' , filter_var($_GET['url'] , FILTER_SANITIZE_URL));
                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = 'Controller' .$controller; //Ex: ControllerAccueil
                $controllerFile = 'controller/'.$controllerClass. '.php'; //Dossier controller 

                if(file_exists($controllerFile)) {
                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url);
                }else {
                    throw new Exception('Page introuvable ');
                }
            }else {
                require_once ('controller/ControllerAccueil.php');
                $this->_ctrl = new ControllerAccueil($url);
            }

        }catch(Exception $e) {
            $errorMessage = $e->getMessage();
            require_once('views/viewErrors.php');
        } 
    }
}
