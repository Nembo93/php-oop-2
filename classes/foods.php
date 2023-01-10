<?php
class Food extends Products{
    public $name;
    public $price;
    public $ingredients;

    public function __construct($name, $price, $ingredients)
    {
        $this->name = $name;
        $this->price = $price;
        $this->ingredients = $ingredients;
    }

}

$food= [
    new Food("Crocchette Meow", 5, "ciao"),
    new Food("Manzo Meow", 3, "ciao"),
    new Food("Salmone Meow", 3, "ciao"),
    new Food("Crocchette Bau", 7, "ciao"),
    new Food("Pollo Bau", 3, "ciao"),
    new Food("Manzo e verdure Bau", 4, "ciao"),
]

?>