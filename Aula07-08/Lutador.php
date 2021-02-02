<?php

class Lutador {
    
//----Atributos----\\
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
//----Metodo construct----\\
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso){
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setPeso($peso);
        $this->setAltura($altura);
        $this->setIdade($idade);
    }

//----Metodos----\\
    public function apresentar(){
        echo "<br> Lutador: ", $this->getNome();
        echo "<br> Origem: ", $this->getNacionalidade();
        echo "<br> ", $this->getIdade(), " anos";
        echo "<br> ", $this->getAltura(), "m de altura";
        echo "<br> Pesando: ", $this->getPeso(), "kg";
        echo "<br> Ganhou: ", $this->getVitorias();
        echo "<br> Perdeu: ", $this->getDerrotas();
        echo "<br> Empatou: ", $this->getEmpates();
    }
    public function status(){
        echo "<br> ", $this->getNome();
        echo "<br> é peso ", $this->getCategoria();
        echo "<br> ", $this->getVitorias()," Vitorias";
        echo "<br> ", $this->getDerrotas()," Derrotas";
        echo "<br> ", $this->getEmpates()," Empates";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
//----Metodos Getters e Setters----\\
    #nome
    private function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    
    #nacionalidade
    private function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }
    private function getNacionalidade(){
        return $this->nacionalidade;
    }
   
    #idade
    public function setIdade($idade){
        $this->idade = $idade;
    }
    private function getIdade(){
        return $this->idade;
    }
    
    #altura
    private function setAltura($altura){
        $this->altura = $altura;
    }
    private function getAltura(){
        return $this->altura;
    }
    
    #peso
    private function setPeso($peso){
        $this->peso = $peso;
        if($peso < 52.2){
            $this->setCategoria("invalido");
        }
        elseif($peso <= 70.3 && $peso >= 52.2){
            $this->setCategoria("leve");
        }
        elseif($peso <= 83.9 && $peso > 70.3){
            $this->setCategoria("medio");
        }
        elseif($peso > 83.9 && $peso <= 120.2){
            $this->setCategoria("pesado");
        }
        else{
            $this->setCategoria("invalido");
        }
    } 
    private function getPeso(){
        return $this->peso;
    }
    
    #categoria
    private function setCategoria($categoria) {
        
        $this->categoria = $categoria;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    
    #vitorias
    private function setVitorias($vitorias){
        $this->vitorias = $vitorias ;
    }
    private function getVitorias() {
        return $this->vitorias;
    }
    
    #derrotas
    private function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }
    private function getDerrotas() {
        return $this->derrotas;
    }

    #empates
    private function setEmpates($empates): void {
        $this->empates = $empates;
    }

    private function getEmpates() {
        return $this->empates;
    }
}