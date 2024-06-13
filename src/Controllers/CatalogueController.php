<?php

namespace Todo\Controllers;

use Todo\Models\CatalogueManager;
use Todo\Validator;

/** Class UserController **/
class CatalogueController {
    private $manager;
    private $validator;

    public function __construct() {
        $this->manager = new CatalogueManager();
        $this->validator = new Validator();
    }

    public function showAll() {
        if (!isset($_SESSION["user"]["username"])) {
            header("Location: /login");
            die();
        } // verifie si un utilisateur est connecter 
        
        $catalogues = $this->manager->getAll(); // appelle la fonction getAll dans le manager

        require VIEWS . 'Todo/catalogue.php'; // renvoie sur la vue catalogue
    }

    public function reservation($slug) {
        if (!isset($_SESSION["user"]["username"])) {
            header("Location: /login");
            die();
        } // verifie si un utilisateur est connecter 

        $reservation = $this->manager->find($slug);
        $reservations = $this->manager->getNotAll($slug);
   
        // appelle la fonction find et getNotAll dans le manager

        if (!$reservation) {
            header("Location: /error");
        }
        require VIEWS . 'Todo/reservation.php'; // renvoie sur la vue reservation
    }

    public function reservation_2(){
        if (!isset($_SESSION["user"]["username"])) {
            header("Location: /login");
            die();
        }

        $reservation = $this->manager->find_tr($_POST['id']);
        // verifie dans find si un utilisateur fais 2fois la meme reservation

        if ($reservation) {
            header("Location: /error");
        } else{
            $this->manager->store();
        } // si l'utilisateur a 2x la meme reservation il y a une erreur sinon il crée une reservation
        header("Location: /"); // renvoie au menu
    }

    public function showAllReserv(){
        if (!isset($_SESSION["user"]["username"])) {
            header("Location: /login");
            die();
        }
        $list_reservation = $this->manager->getAllReserv(); 
        $reservations = $this->manager->getAll();

        // appelle la fonction getAll et getAllReserv dans le manager
        require VIEWS . 'Todo/list_reservation.php'; // renvoie sur la vu list_reservation
        
    }

}
