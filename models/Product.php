<?php

class Product{
    public $name;
    public $price;
    public $poster;
    public $category;
    public $description;

    public function __construct($_name, $_price, $_poster, $_category, $_description)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->poster = $_poster;
        $this->category = $_category;
        $this->description = $_description;
    }

}
?>