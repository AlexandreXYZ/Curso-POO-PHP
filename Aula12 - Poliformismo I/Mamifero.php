<?php
require_once 'Animal.php';
class Mamiferos extends Animal{
    
    //atributos
    private $corPelo;

    //Metodos
    private function locomover(){
        echo "correndo";
    }
    private function alimentar(){
        echo "mamando";
    }
    private function emitirSom(){
        echo "Som de Mamifero";
    }

    //Metodos getter e setter
    function getPelo(){
        return $this->corPelo;
    }
    function setPelo($pelo){
        $this->corPelo = $pelo;
    }
}