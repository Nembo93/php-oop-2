<?php
require_once __DIR__ ."/Foods.php";
require_once __DIR__ ."/Toys.php";
require_once __DIR__ ."/Shelters.php";

class Products{
    public $name;
    public $image;
    public $type;
    public $price;

    public function __construct(string $name, string $type, string $image, int $price)
    {
        $this->name = $name;
        $this->image = $image;
        $this->type = $type;
        $this->price = $price;       
    }
}
?>