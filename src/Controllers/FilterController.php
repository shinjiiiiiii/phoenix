<?php

namespace Todo\Controllers;

use Todo\Models\FilterManager;
use Todo\Validator;

/** Class UserController **/
class FilterController {
    private $manager;
    private $validator;

    public function __construct() {
        $this->manager = new FilterManager();
        $this->validator = new Validator();
    }

    public function showAll($filter) {
        if (!isset($_SESSION["user"]["username"])) {
            header("Location: /login");
            die();
        } // verifie si un utilisateur est connecter 
        
        $filter = $this->manager->getAll($filter);
        // appelle la fonction getAll dans le manager

        require VIEWS . 'Todo/filter.php';
        // renvoie sur la vue 
    }

}
