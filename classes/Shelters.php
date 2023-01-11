<?php
require_once __DIR__ . "/Materials.php";

class Shelters extends Products{
    public $name;
    public $image;
    public $category;
    public $type;
    public $price;
    public $size;

    use Materials;
    public $plast;

    public function __construct($name, $image, Categories $category, $type, $price, $size, $plast)
    {
        $this->name = $name;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
        $this->price = $price;
        $this->size = $size;
        $this->plast = $plast;
    }
}

$shelters = [
    new Shelters ("Mini bed Meow", "img", new Categories ("Cat"), "Shelter", 10, "Small", "Plastica"),
    new Shelters("Mini house Meow", "img", new Categories ("Cat"), "Shelter", 18, "Small", "Plastica"),
    new Shelters("Mini bed Bau", "img", new Categories ("Dog"), "Shelter", 10, "Small", "Plastica"),
    new Shelters("Bed Bau", "img", new Categories ("Dog"), "Shelter", 15, "Regular", "Plastica"),
    new Shelters("Mini house Bau", "img", new Categories ("Dog"),"Shelter", 18, "Small", "Plastica"),
    new Shelters("House Bau", "img", new Categories ("Dog"), "Shelter", 30, "Regular", "Plastica"),
]
?>