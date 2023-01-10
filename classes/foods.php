<?php
require_once __DIR__ ."/Categories.php";
class Food extends Products{
    public $name;
    public $image;
    public $category;
    public $type;
    public $price;
    public $ingredients;

    public function __construct($name, $image, Categories $category, $type, $price, $ingredients)
    {
        $this->name = $name;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
        $this->price = $price;
        $this->ingredients = $ingredients;
    }
}

$foods = [
    new Food("Crocchette Meow", "img", new Categories ("Cat"), "Food", 5, "Carne, verdure"),
    new Food("Manzo Meow", "img", new Categories ("Cat"), "Food", 3, "Manzo, verdure"),
    new Food("Salmone Meow", "img", new Categories ("Cat"), "Food", 3, "Salmone, verdure"),
    new Food("Crocchette Bau", "img", new Categories ("Dog"), "Food", 7, "Carne"),
    new Food("Pollo Bau", "img", new Categories ("Dog"), "Food", 3, "Food", "Pollo, verdure"),
    new Food("Manzo e verdure Bau", "img", new Categories ("Dog"), "Food", 4, "Manzo, verdure"),
]

?>