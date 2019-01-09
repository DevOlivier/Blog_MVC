<?php

class Article {
    private $_id;
    private $_titles;
    private $_content;
    private $_dateAjout;
    private $_debutArticle;
    private $_category;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data) {
        foreach($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if(method_exists($this , $method)) {
                $this->$method($value);
            }
        }
    }
    //SETTER
    public function setId($id) {
        $id = (int) $id;
        if($id > 0) {
            $this->_id = $id;
        }
    }
    public function setTitle($title) {
        if(is_string($title)) {
            $this->_title = $title;
        }
    }
    public function setContent($content) {
        if(is_string($content)) {
            $this->_content = $content;
        }
    }
    //A vérifier
    public function setDateAjout($dateAjout) {
        $this->_dateAjout = $dateAjout;
    }
    //A vérifier
    public function setDebutArticle($debutArticle) {
        if(is_string($debutArticle)) {
            $this->_debutArticle = $debutArticle;
        }
    }
 
    public function setCategory($category) {
        if(is_string($category)) {
            $this->_category = $category;
        }
    }
    //GETTER
    public function getId() {
        return $this->_id;
    }
    public function getTitle() {
        return $this->_title;
    }
    public function getContent() {
        return $this->_content;
    }
    public function getDateAjout() {
        return $this->_dateAjout;
    }
    public function getDebutArticle() {
        return $this->_debutArticle;
    }

    public function getCategory() {
        return $this->_category;
    }           
}
