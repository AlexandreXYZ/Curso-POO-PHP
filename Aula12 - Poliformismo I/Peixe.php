<?php
require_once 'Animal.php';
class Peixe extends Animal{
    
    //atributos
    private $corEscama;

    //Metodos
    private function locomover(){
        echo "Nadando";
    }
    private function alimentar(){
        echo "comendo";
    }
    private function emitirSom(){
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