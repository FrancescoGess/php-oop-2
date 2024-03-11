<?php

require_once __DIR__ . "/Product.php";
class Food extends Product{
    protected $calories;

    public function __construct($_name, $_price, $_poster, Category $_category, $_available)
    {
       parent::__construct($_name, $_price, $_poster, $_category, $_available);
    }

    public function setCalories($_calories){
        $this->calories = $_calories;
    }

    public function getCalories(){
        return $this->calories;
    }
}
?>