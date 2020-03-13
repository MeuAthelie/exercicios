<?php
include_once "classAnimal.php";

class Aves extends Animal{
    public $Max_voo;

    public function __construct($peso,$comprimento,$altura,$cor,$especie,$max_voo){
        parent::__construct($peso,$comprimento,$altura,$cor,$especie);
        $this->max_voo=$max_voo;
    }
}
?>