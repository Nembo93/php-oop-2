<?php
class Shelters extends Products{
    public $name;
    public $image;
    public $type;
    public $price;
    public $size;

    public function __construct($name, $image, $type, $price, $size)
    {
        $this->name = $name;
        $this->image = $image;
        $this->type = $type;
        $this->price = $price;
        $this->size = $size;
    }
}

$shelters = [
    new Shelters ("Mini bed Meow", "img", "Shelter", 10, "Small"),
    new Shelters("Mini house Meow", "img", "Shelter", 18, "Small"),
    new Shelters("Mini bed Bau", "img", "Shelter", 10, "Small"),
    new Shelters("Bed Bau", "img", "Shelter", 15, "Regular"),
    new Shelters("Mini house Bau", "Shelter", "Toy", 18, "Small"),
    new Shelters("House Bau", "img", "Shelter", 30, "Regular"),
]
?>