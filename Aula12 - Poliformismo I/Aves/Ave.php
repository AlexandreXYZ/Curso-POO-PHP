<?php
require_once 'Animal.php';
class Ave extends Animal{
    
    //atributos
    protected $corPena;

    //Metodos
    public function locomover(){
        echo "Voando";
    }
    public function alimentar(){
        echo "Comendo frutas";
    }
    public function emitirSom(){
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