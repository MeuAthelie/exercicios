<?php
include_once "classAnimal.php";

class Mamiferos extends Animal{
    public $Max_vel;
    public function __construct($max_vel){
        parent::__construct($peso,$comprimento,$altura,$cor,$especie);
        $this->max_vel=$max_vel;
    }
}
?>