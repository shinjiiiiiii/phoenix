<?php
namespace Todo\Models;


class List_reservation
{

    // pour recuperer toutes les valeurs dans nos table en bdd
    private $id_order;
    private $reference;
    private $account_id;
    private $travel_id;
    private $nb_personne;
    private $nb_week;
    private $total;
    private $email_confirm;

    private $id_travel;
    private $name;
    private $description;
    private $image;
    private $price;
    private $category_id;

    

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


    public function getTravel_id()
    {
        return $this->travel_id;
    }
    public function setTravel_id(int $travel_id)
    {
           $this->travel_id = $travel_id;
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
        return $this->nb_week;
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




    public function getId_travel()
    {
        return $this->id_travel;
    }
    public function setId_travel(int $id_travel)
    {
           $this->id_travel = $id_travel;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice(string $price)
    {
        $this->price = $price;
    }

    public function getId_category()
    {
        return $this->category_id;
    }
    public function setId_category(int $category_id)
    {
           $this->category_id = $category_id;
    }
}
?>