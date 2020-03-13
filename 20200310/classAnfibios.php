<?php
include_once "classAnimal.php";

class Anfibi_rept extends Animal{
    public $Max_Sub;
    public function __construct($Max_Sub){
        parent::__construct($peso,$comprimento,$altura,$cor,$especie);
        $this->Max_Sub=$Max_Sub;
    }
}
?>