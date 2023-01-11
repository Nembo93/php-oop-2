<?php
require_once __DIR__ ."/Foods.php";
require_once __DIR__ ."/Toys.php";
require_once __DIR__ ."/Shelters.php";
// require_once __DIR__ ."/Categories.php";

class Products{
    public $name;
    public $image;
    public $type;
    public $price;

    public function __construct(string $name, string $image, string $type, int $price)
    {
        $this->name = $name;
        $this->image = $image;
        $this->type = $type;
        $this->price = $price;
        
        function getPrice($price){
            if (!is_int($price)){
                throw new Exception("Non è un numero");
                return $price;
            }
            try {
                echo getPrice($price);
            } catch (Exception $e){
                echo "Eccezione: " . $e->getMessage();
            }
        }
    }

}
?>