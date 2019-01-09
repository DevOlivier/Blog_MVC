<?php
class ControllerAccueil {
    private $_articleManager;
    private $_view;

    public function __construct($url)
    {
        //count oblige à avoir un seul paramètre en url ex : php/accueil.php et non pas php/accueil.php/article1
        if(isset($url) && count($url) > 1) {
            throw new Exception('Page introuvable');
        }else {
            $this->articles();
        }
    }
    private function articles() {
        $this->_articleManager = new ArticleManager;
        $articles = $this->_articleManager->getArticles();
        require_once ('views/viewsAccueil.php');
    }
}
