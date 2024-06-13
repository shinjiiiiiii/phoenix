<?php

namespace Todo\Controllers;

use Todo\Models\CategoryManager;
use Todo\Models\UserManager;
use Todo\Validator;

/** Class UserController **/
class UserController {
    private $manager;
    private $validator;

    private $manager2;

    public function __construct() {
        $this->manager = new UserManager();
        $this->manager2 = new CategoryManager();
        $this->validator = new Validator();
    }

    public function showLogin() {
        require VIEWS . 'Auth/login.php'; // renvoie sur la vue login
    }

    public function showRegister() {
        require VIEWS . 'Auth/register.php'; // renvoie sur la vue register
    }

    public function showAdmin() {
        if (!isset($_SESSION["user"]["username"])) {
            header("Location: /login");
            die();
        }
        $category = $this->manager2->getAll();
        require VIEWS . 'Auth/Admin.php'; // renvoie sur la vue Admin
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login/');
        // deconnecte l'utilisateur
    }

    public function register() {

            $res = $this->manager->find($_POST["email"]); // verifie si un utilisateur existe avec le meme nom

            if (empty($res)) {
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $this->manager->store($password);

                $_SESSION["user"] = [
                    "id" => $this->manager->getBdd()->lastInsertId(),
                    "email" => $_POST["email"]
                ];
                header("Location: /");
            } else {
                $_SESSION["error"]['email'] = "Le mail choisi est déjà utilisé !";
                header("Location: /register");
            }
    }

    // public function login() {

    //         $res = $this->manager->find($_POST["email"]); // verifie si un utilisateur existe avec le meme email

    //         if ($res && password_verify($_POST['password'], $res->getPassword())) {
    //             $_SESSION["user"] = [
    //                 "id" => $res->getId(),
    //                 "username" => $res->getUsername()
    //             ];
    //             header("Location: /");
    //         } else {
    //             $_SESSION["error"]['message'] = "Une erreur sur les identifiants";
    //             header("Location: /login");
    //         }
    // }
    

    public function login() {


        $res = $this->manager->find($_POST["email"]); // verifie si un utilisateur existe avec le meme email

        if ($res && password_verify($_POST['password'], $res->getPassword())) {
            $_SESSION["user"] = [
                "id" => $res->getId(),
                "username" => $res->getUsername()
            ];
            header("Location: /");
        } else {
            $_SESSION["error"]['message'] = "Une erreur sur les identifiants";
            header("Location: /login");
        }
        
}



}
