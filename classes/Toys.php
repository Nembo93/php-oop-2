<?php
class Toys extends Products{
    public $name;
    public $image;
    public $type;
    public $price;
    public $item;

    public function __construct($name, $image, $type, $price, $item)
    {
        $this->name = $name;
        $this->image = $image;
        $this->type = $type;
        $this->price = $price;
        $this->item = $item;
    }
}

$toys = [
    new Toys("Mini ball Meow", "img", "Toy", 3, "Ball"),
    new Toys("Peluche Meow", "img", "Toy", 5, "Peluche"),
    new Toys("Ball Bau", "img", "Toy", 4, "Ball"),
    new Toys("Peluche Bau", "img", "Toy", 7, "Peluche"),
]
?>