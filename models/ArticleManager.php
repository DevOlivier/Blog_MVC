<?php
//Récupére les article, ajouter
class ArticleManager extends Model{

    public function getArticles() {
        $this->getBdd(); // Ne sert à rien
        return $this->getAll('articles' , 'Article');
    }
}
