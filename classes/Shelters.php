<?php

class Shelters extends Products{
    public $name;
    public $image;
    public $category;
    public $type;
    public $price;
    public $size;

    public function __construct($name, $image, Categories $category, $type, $price, $size)
    {
        $this->name = $name;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
        $this->price = $price;
        $this->size = $size;
    }
}

$shelters = [
    new Shelters ("Mini bed Meow", "img", new Categories ("Cat"), "Shelter", 10, "Small"),
    new Shelters("Mini house Meow", "img", new Categories ("Cat"), "Shelter", 18, "Small"),
    new Shelters("Mini bed Bau", "img", new Categories ("Dog"), "Shelter", 10, "Small"),
    new Shelters("Bed Bau", "img", new Categories ("Dog"), "Shelter", 15, "Regular"),
    new Shelters("Mini house Bau", "img", new Categories ("Dog"),"Shelter", 18, "Small"),
    new Shelters("House Bau", "img", new Categories ("Dog"), "Shelter", 30, "Regular"),
]
?>