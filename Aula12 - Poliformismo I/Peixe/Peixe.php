<?php
require_once 'Animal.php';
class Peixe extends Animal{
    
    //atributos
    protected $corEscama;

    //Metodos
    public function locomover(){
        echo "Nadando";
    }
    public function alimentar(){
        echo "comendo";
    }
    public function emitirSom(){
        echo "Soltar Bolha";
    }

    //Getter e Setter
    function getEscama(){
        return $this->corEscama;
    }
    function setEscama($Escama){
        $this->corEscama = $Escama;
    }
}