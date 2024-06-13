<?php
namespace Todo\Models;

use Todo\Models\User;
/** Class UserManager **/
class UserManager {

    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd()
    {
        return $this->bdd;
        // retourne notre bdd
    }

    public function find($username) {
        $stmt = $this->bdd->prepare("SELECT * FROM tp_accounts WHERE email = ?");
        $stmt->execute(array(
            $username
        ));
        // verifie si l'email est deja utiliser
        $stmt->setFetchMode(\PDO::FETCH_CLASS,"Todo\Models\User");
        // renvoie les valeurs stocker en bdd dans le model user
        return $stmt->fetch();
    }

    // public function all() {
    //     $stmt = $this->bdd->query('SELECT * FROM User');
    //     // recupere les donnees de tout les utilisateur 
    //     return $stmt->fetchAll(\PDO::FETCH_CLASS,"Todo\Models\User");
    //     // renvoie les valeurs stocker en bdd dans le model user
    // }

    public function getRole() {
        $stmt = $this->bdd->query("SELECT * FROM tp_accounts WHERE account_id = ? ");
        // recupere les donnees de tout les utilisateur 
        $stmt->execute(array(
            $_SESSION["user"]["id"],
        ));

        
        return $stmt->fetchAll(\PDO::FETCH_CLASS,"Todo\Models\User");
        // renvoie les valeurs stocker en bdd dans le model user
    }

    public function store($password) {
        $stmt = $this->bdd->prepare("INSERT INTO tp_accounts(username, password, email, adress, tel, num_carte, crypto) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute(array(
            $_POST["user"],
            $password,
            $_POST["email"],
            $_POST["adress"],
            $_POST["tel"],
            $_POST["carte"],
            $_POST["crypto"]
        ));
    }
    // cree un utilisateur
}
