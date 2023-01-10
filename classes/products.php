<?php
require_once __DIR__ ."/foods.php";
class Products{
    public $name;
    public $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;       
    }
}
?>