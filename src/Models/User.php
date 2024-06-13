<?php
namespace Todo\Models;

/** Class User **/
class User {

    // pour recuperer toutes les valeurs dans nos table en bdd
    private $id_account;
    private $username;
    private $password;
    private $email;
    private $name;
    private $adress;
    private $tel;
    private $num_carte;
    private $crypto;
    private $role;

    public function getRole() {
        return $this->role;
    }

    public function setRole(String $role) {
        $this->role = $role;
    }




    public function getCrypto() {
        return $this->crypto;
    }

    public function setCrypto(String $crypto) {
        $this->crypto = $crypto;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(String $email) {
        $this->email = $email;
    }

    public function getNum_carte() {
        return $this->email;
    }

    public function setNum_carte(String $num_carte) {
        $this->num_carte = $num_carte;
    }
    public function getAdress() {
        return $this->adress;
    }

    public function setAdress(String $adress) {
        $this->adress = $adress;
    }


    public function getTel() {
        return $this->adress;
    }

    public function setTel(String $tel) {
        $this->tel = $tel;
    }

    public function getName() {
        return $this->email;
    }

    public function setName(String $name) {
        $this->name = $name;
    }


    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getId() {
        return $this->id_account;
    }

    public function setUsername(String $username) {
        $this->username = $username;
    }

    public function setPassword(String $password) {
        $this->password = $password;
    }

    public function setId(Int $id_account) {
        $this->id_account = $id_account;
    }
}
