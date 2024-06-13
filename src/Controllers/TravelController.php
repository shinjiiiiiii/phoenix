<?php

namespace Todo\Controllers;

use Todo\Models\UserManager;
use Todo\Models\TravelManager;
use Todo\Validator;

/** Class UserController **/
class TravelController {

    private $manager;
    private $manager2;
    private $validator;

    public function __construct() {
        $this->manager = new UserManager();
        $this->manager2 = new TravelManager();
        $this->validator = new Validator();
    }

    public function index() {
        require VIEWS . 'Todo/homepage.php';
        // renvoie sur homepage
    }

    public function store(){
        if (!isset($_SESSION["user"]["username"])) {
            header("Location: /login");
            die();
        }
        $store = $this->manager2->find($_POST['title']);
        // verifie dans find si un utilisateur fais 2fois la meme destination

        if ($store) {
            header("Location: /error");
        } else{
            $this->manager2->store();
        } 
        header("Location: /"); // renvoie au menu
    }

}
