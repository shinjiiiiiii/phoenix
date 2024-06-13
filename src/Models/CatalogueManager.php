<?php
namespace Todo\Models;

use Todo\Models\Catalogue;
use Todo\Models\order;
use Todo\Models\list_reservation;
/** Class UserManager **/
class CatalogueManager {

    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function find($name)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM tp_travels WHERE id_travel = ?");
        $stmt->execute(array(
            $name
        ));
        // cherche si dans la table tp_travels il y a deja $name qui existe 
        
        // renvoie les valeurs stocker en bdd dans le model catalogue

        return $stmt->fetchAll(\PDO::FETCH_CLASS,"Todo\Models\Catalogue");
        
    }

    public function find_tr($name)
    {
        $stmt = $this->bdd->prepare(" SELECT * FROM tp_orders INNER JOIN tp_accounts on tp_orders.account_id = tp_orders.account_id WHERE travel_id = ? AND account_id = ? ");
        $stmt->execute(array(
            $name,
            $_SESSION["user"]["id"]
        ));
        // cherche si dans la table tp_orders il y a deja $name qui existe 

        return $stmt->fetchAll(\PDO::FETCH_CLASS,"Todo\Models\order");
        // renvoie les valeurs stocker en bdd dans le model order
    }
    public function getAll()
    {
        $stmt = $this->bdd->prepare('SELECT * FROM tp_travels');
        $stmt->execute();
        // recupere toutes les valeurs dans la table tp_travels 
        return $stmt->fetchAll(\PDO::FETCH_CLASS,"Todo\Models\Catalogue");
        // renvoie les valeurs stocker en bdd dans le model catalogue
    }

    public function getNotAll($slug)
    {
        $stmt = $this->bdd->prepare('SELECT * FROM tp_travels WHERE id_travel != ? ');
        $stmt->execute(array(
            $slug
        ));
        // recupere tout les valeurs qui ne sont pas = $slug dans tp_travels
        return $stmt->fetchAll(\PDO::FETCH_CLASS,"Todo\Models\Catalogue");
        // renvoie les valeurs stocker en bdd dans le model catalogue
    }

    public function getAllReserv()
    {
        $stmt = $this->bdd->prepare('SELECT * FROM tp_orders INNER JOIN tp_travels on tp_orders.travel_id = tp_travels.id_travel WHERE account_id = ?');
        $stmt->execute(array(
            $_SESSION["user"]["id"]
        ));
        // recupere les reservations faites par un utilisateur 
        return $stmt->fetchAll(\PDO::FETCH_CLASS,"Todo\Models\list_reservation");
        // renvoie les valeurs stocker en bdd dans le model list_reservation
    }

    public function store() {
        $price = $_POST["price"]*$_POST['personnes'];
        $stmt = $this->bdd->prepare("INSERT INTO tp_orders(reference, account_id, travel_id, nb_personne, nb_week, total, email_confirm) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute(array(
            uniqid(),
            $_SESSION["user"]["id"],
            $_POST["id"],
            $_POST["personnes"],
            $_POST["week"],
            $price * $_POST['week'],
            $_POST['email']
        ));
    }
    // pour cree une reservation
}
