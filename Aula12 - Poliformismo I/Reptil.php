<?php
require_once 'Animal.php';
class Reptil extends Animal{
    
    //atributos
    private $corEscama;

    //Metodos
    private function locomover(){
        echo "Rastejando";
    }
    private function alimentar(){
        echo "Comendo";
    }
    private function emitirSom(){
        echo "Som de Reptil";
    }

    //Getter e Setter
    function getEscama(){
        return $this->corEscama;
    }
    function setEscama($Escama){
        $this->corEscama = $Escama;
    }
}