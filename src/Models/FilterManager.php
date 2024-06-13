<?php
namespace Todo\Models;

use Todo\Models\Catalogue;
/** Class UserManager **/
class Filtermanager {

    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getAll($filter)
    {
        $stmt = $this->bdd->prepare('SELECT * FROM tp_travels INNER JOIN tp_category on tp_travels.category_id = tp_category.id_category WHERE category_id = ?');
        $stmt->execute(array(
            $filter
        ));
        //  recupere toutes les valeurs qui on le meme category_id
        return $stmt->fetchAll(\PDO::FETCH_CLASS,"Todo\Models\Filter");
        // renvoie les valeurs stocker en bdd dans le model filter
    }
}
