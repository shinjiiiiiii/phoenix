<?php
namespace Todo\Models;


class Filter
{

    // pour recuperer toutes les valeurs dans nos table en bdd
    private $id_travel;
    private $name;
    private $description;
    private $image;
    private $price;
    private $category_id;
    private $id_category;
    private $name_category;

    public function getId__category()
    {
        return $this->id_category;
    }
    public function setId__category(int $id_category)
    {
           $this->id_category = $id_category;
    }

    public function getName__category()
    {
        return $this->name_category;
    }
    public function setName__category(int $name_category)
    {
           $this->name_category = $name_category;
    }



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

    public function getCategory_id()
    {
        return $this->category_id;
    }
    public function setCategory_id(int $category_id)
    {
           $this->category_id = $category_id;
    }

}
?>