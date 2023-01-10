<?php

class Toys extends Products{
    public $name;
    public $image;
    public $category;
    public $type;
    public $price;
    public $item;

    public function __construct($name, $image, Categories $category, $type, $price, $item)
    {
        $this->name = $name;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
        $this->price = $price;
        $this->item = $item;
    }
}

$toys = [
    new Toys("Mini ball Meow", "img", new Categories("Cat"), "Toy", 3, "Ball"),
    new Toys("Peluche Meow", "img", new Categories("Cat"),"Toy", 5, "Peluche"),
    new Toys("Ball Bau", "img", new Categories("Dog"), "Toy", 4, "Ball"),
    new Toys("Peluche Bau", "img", new Categories("Dog"), "Toy", 7, "Peluche"),
]
?>