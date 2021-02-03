<?php
require_once 'Animal.php';
class Ave extends Animal{
    
    //atributos
    private $corPena;

    //Metodos
    private function locomover(){
        echo "Voando";
    }
    private function alimentar(){
        echo "Comendo frutas";
    }
    private function emitirSom(){
        echo "Cantando";
    }

    //Getter e Setter
    function getPena(){
        return $this->corPena;
    }
    function setPena($Pena){
        $this->corPena = $Pena;
    }
}