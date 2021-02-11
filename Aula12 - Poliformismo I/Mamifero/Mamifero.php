<?php
require_once 'Animal.php';
class Mamiferos extends Animal{
    
    //atributos
    protected $corPelo;

    //Metodos
    public function locomover(){
        echo "correndo";
    }
    public function alimentar(){
        echo "mamando";
    }
    public function emitirSom(){
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