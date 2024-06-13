<?php
namespace Todo\Models;


class order
{

    // pour recuperer toutes les valeurs dans nos table en bdd
    
    private $id_order;
    private $reference;
    private $account_id;
    private $id_travel;
    private $nb_personne;
    private $nb_week;
    private $total;
    private $email_confirm;


    public function getId()
    {
        return $this->id_order;
    }
    public function setId(int $id_order)
    {
           $this->id_order = $id_order;
    }

    public function getReference()
    {
        return $this->reference;
    }
    public function setReference(int $reference)
    {
           $this->reference = $reference;
    }

    public function getaccount_id()
    {
        return $this->account_id;
    }
    public function setaccount_id(int $account_id)
    {
           $this->account_id = $account_id;
    }


    public function getId_travel()
    {
        return $this->id_travel;
    }
    public function setId_travel(int $id_travel)
    {
           $this->id_travel = $id_travel;
    }

    public function getNb_personne()
    {
        return $this->nb_personne;
    }
    public function setNb_personne(int $nb_personne)
    {
           $this->nb_personne = $nb_personne;
    }

    public function getNb_week()
    {
        return $this->nb_personne;
    }
    public function setNb_week(int $nb_week)
    {
           $this->nb_week = $nb_week;
    }

    public function getTotal()
    {
        return $this->total;
    }
    public function setTotal(int $total)
    {
           $this->total = $total;
    }

    public function getEmail_confirm()
    {
        return $this->email_confirm;
    }
    public function setEmail_confirm(int $email_confirm)
    {
           $this->email_confirm = $email_confirm;
    }

}
?>