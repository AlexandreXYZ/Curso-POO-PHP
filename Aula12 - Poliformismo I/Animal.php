<?php
abstract class animal{

    //Atributos
    private $Peso;
    private $Idade;
    private $Membros;

    //Metodos
    private function locomover(){
        echo " ";
    }
    private function alimentar(){
        echo " ";
    }
    private function emitirSom(){
        echo ' ';
    }

    //Metodos Getters e Setters\\
    #Peso
    function getPeso(){
        return $this->Peso;
    }
    function setPeso($peso){
        $this->Peso = $peso;
    }

    #Idade
    function getIdade(){
        return $this->Idade;
    }
    function setIdade($Idade){
        $this->Idade = $Idade;
    }

    #Membros
    function getMembros(){
        return $this->Membros;
    }
    function setMembros($Membros){
        $this->Membros = $Membros;
    }
}