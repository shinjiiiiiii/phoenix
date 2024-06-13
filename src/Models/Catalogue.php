<?php
namespace Todo\Models;


class Catalogue
{
    // pour recuperer toutes les valeurs dans nos table en bdd

    private $id_travel;
    private $name;
    private $description;
    private $image;
    private $price;
    private $category_id;


    public function getId()
    {
        return $this->id_travel;
    }
    public function setId(int $id_travel)
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