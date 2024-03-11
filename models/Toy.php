<?php 

require_once __DIR__ . "/Toy.php";
 class Toy extends Product{
    protected $genre;

    public function __construct($_name, $_price, $_poster, Category $_category, $_available)
    {
       parent::__construct($_name, $_price, $_poster, $_category, $_available);
    }

    public function setGenre($_genre){
      $this->genre = $_genre;
    }
    
    public function getGenre(){
      $this->genre;
    }
 }
?>