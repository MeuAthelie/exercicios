<?php
include_once "classAnimal.php";

class peixes extends Animal{
    public $Temperatura_media;
    public function __construct($Temperatura_media){
        parent::__construct($peso,$comprimento,$altura,$cor,$especie);
        $this->Temperatura_media=$Temperatura_media;
    }
}
?>