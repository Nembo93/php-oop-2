<?php
require_once __DIR__ ."/Categories.php";

class Categories{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }
}
?>