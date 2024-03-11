<?php

class Product{
    public $name;
    public $price;
    public $poster;
    public $category;
    public $available;

    public function __construct($_name, $_price, $_poster, Category $_category, $_available)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->poster = $_poster;
        $this->category = $_category;
        $this->available = $_available;
    }

    public function getProductDetails(){
        return "Product: $this->name, Price->$this->price";
    }

    public function getIcon(){
         $icon = $this-> category -> icon;
        return "<i class='$icon'</i>";
    }
}
?>