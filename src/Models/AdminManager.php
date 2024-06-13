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

    public function store($password) {
        // $stmt = $this->bdd->prepare("INSERT INTO tp_accounts(username, password, email, adress, tel, num_carte, crypto) VALUES (?, ?, ?, ?, ?, ?, ?)");
        // $stmt->execute(array(
        //     $_POST["username"],
        //     $password,
        //     $_POST["email"],
        //     $_POST["adress"],
        //     $_POST["tel"],
        //     $_POST["carte"],
        //     $_POST["crypto"]
        // ));
    }
    
}
