<?php
    abstract class Animal{

        //Atributos
        protected $Peso;
        protected $Idade;
        protected $Membros;

        //Metodos
        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();

        //Metodos Getters e Setters\\
        #Peso
        function getPeso(){
            return $this->Peso;
        }
        function setPeso($peso) : void{
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