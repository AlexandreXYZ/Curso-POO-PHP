<?php
require_once 'Animal.php';
class Reptil extends Animal{
    
    //atributos
    protected $corEscama;

    //Metodos
    public function locomover(){
        echo "Rastejando";
    }
    public function alimentar(){
        echo "Comendo";
    }
    public function emitirSom(){
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