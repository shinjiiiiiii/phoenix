<?php

namespace Todo\Controllers;

use Todo\Models\CategoryManager;
use Todo\Models\UserManager;
use Todo\Validator;

/** Class UserController **/
class AdminController {
    private $manager;
    private $validator;

    private $manager2;

    public function __construct() {
        $this->manager = new UserManager();
        $this->manager2 = new CategoryManager();
        $this->validator = new Validator();
    }

    public function showAdmin() {
        
        $category = $this->manager2->getAll();
        require VIEWS . 'Auth/Admin.php'; // renvoie sur la vue Admin
    }

}
