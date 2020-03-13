<?php
class Animal{
    public $peso;
    public $comprimento;
    public $altura;
    public $cor;
    public $especie;

    public function __construct($peso,$comprimento,$altura,$cor,$especie){
        $this->peso = $peso;
        $this->comprimento = $comprimento;
        $this->altura = $altura;
        $this->cor = $cor;
        $this->especie = $especie;
    }

}



?>