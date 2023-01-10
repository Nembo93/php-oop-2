<?php
class Food extends Products{
    public $name;
    public $image;
    public $type;
    public $price;
    public $ingredients;

    public function __construct($name, $image, $type, $price, $ingredients)
    {
        $this->name = $name;
        $this->image = $image;
        $this->type = $type;
        $this->price = $price;
        $this->ingredients = $ingredients;
    }

}

$food= [
    new Food("Crocchette Meow", "img", "Food", 5, "Carne, verdure"),
    new Food("Manzo Meow", "img", "Food", 3, "Manzo, verdure"),
    new Food("Salmone Meow", "img", "Food", 3, "Salmone, verdure"),
    new Food("Crocchette Bau", "img", "Food", 7, "Carne"),
    new Food("Pollo Bau", "img", "Food", 3, "Food", "Pollo, verdure"),
    new Food("Manzo e verdure Bau", "img", "Food", 4, "Manzo, verdure"),
]

?>