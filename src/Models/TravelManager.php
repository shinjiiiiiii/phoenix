<?php
namespace Todo\Models;

use Todo\Models\Catalogue;
use Todo\Models\order;
use Todo\Models\list_reservation;
/** Class UserManager **/
class TravelManager {

    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function store() {

        $uploaddir = "./assets/img/";
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        $image = $_FILES['image']['name'];
        $stmt = $this->bdd->prepare("INSERT INTO tp_travels(name, description, image, price, category_id) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute(array(
        $_POST["title"],
        $_POST["description"],
        $image,
        $_POST["prix"],
        $_POST["select"]
    ));
    } else {
        echo "Upload failed";
    }
    }
    // pour cree un voyage

    public function find($name)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM tp_travels WHERE name = ?");
        $stmt->execute(array(
            $name
        ));
        // cherche si dans la table tp_travels il y a deja $name qui existe 
        return $stmt->fetchAll(\PDO::FETCH_CLASS,"Todo\Models\Catalogue");
        // renvoie les valeurs stocker en bdd dans le model catalogue
    }
}
