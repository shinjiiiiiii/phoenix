<?php
namespace Todo\Models;

use Todo\Models\Category;

/** Class UserManager **/
class CategoryManager {

    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getAll()
    {
        $stmt = $this->bdd->prepare('SELECT * FROM tp_category');
        $stmt->execute();
        // recupere toutes les valeurs dans la table tp_category 
        return $stmt->fetchAll(\PDO::FETCH_CLASS,"Todo\Models\category");
        // renvoie les valeurs stocker en bdd dans le model category
    }
    
}
