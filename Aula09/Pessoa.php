<?php
class Pessoa {
    //Atributos\\
    private $nome;
    private $idade;
    private $sexo;
    
    //Metodo Padrão\\
    function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    //Metodos\\
    public function fazer_Aniver() {
        $this->setIdade($this->getIdade()+1);
    }
    
    //Metodos Especiais\\
    
    #Nome
    function getNome() {
        return $this->nome;
    }
    function setNome($nome): void {
        $this->nome = $nome;
    }
    
    #Idade
    function getIdade() {
        return $this->idade;
    }
    function setIdade($idade): void {
        $this->idade = $idade;
    }

    #sexo
    function getSexo() {
        return $this->sexo;
    }
    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
}
