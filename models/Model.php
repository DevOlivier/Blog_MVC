<?php
//Création d'un méthode universelle qui pourra être utilisée pour les autres classes
//Cette classe ne sera pas instanciée, elle servira uniquement aux autres classes qui pourront s'étendre à celle ci , c'est pour cela qu'on utilise une classe abstraite    
abstract class Model{
    private static $_bdd;
    //instancie la connexion à la base de données
    private static function setBdd() {
        self::$_bdd = new PDO('mysql:host=localhost;dbname=blog_perso;charset=utf8' , 'root' , 'root');
        //self::$_bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_WARNING);
    }
    //Récupére la connexion à la base de données
    protected function getBdd() {
        if(self::$_bdd == null) {
            self::setBdd(); //$this->setBdd();
            return self::$_bdd;
        }
    }
    protected function getAll($table , $obj) {
        $var = [];
        $request = self::$_bdd->prepare('SELECT * FROM ' . $table . ' ORDER BY id DESC');
        $request->execute();
        while($data = $request->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }
        return $var;
        $request->closeCursor();
    }
}
