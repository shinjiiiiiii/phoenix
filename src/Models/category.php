<?php
namespace Todo\Models;


class Category
{
    // pour recuperer toutes les valeurs dans nos table en bdd

    private $id_category;
    private $name_category;

    public function getId()
    {
        return $this->id_category;
    }
    public function setId(int $id_category)
    {
           $this->id_category = $id_category;
    }
    public function getName()
    {
        return $this->name_category;
    }
    public function setName(string $name_category)
    {
        $this->name_category = $name_category;
    }

}
?>