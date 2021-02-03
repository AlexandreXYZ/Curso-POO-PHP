<?php
class Conta {
//-----Atributos-----//
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
//Metodo padrão\\
    function __construct() {
        $this->saldo = 0;
        $this->status = false;
    }

//-----Metodos-----//
    public function abrirConta($x){
        
        if ($this->tipo == NULL and $x == "cc"){
            $this->tipo = $x;
            $this->setStatus(true);
            $this->depositar(50); //Sempre que abrir uma conta Corrente recebe 50 reais    
        }
        
        if ($this->tipo == NULL and $x == "cp"){
            $this->tipo = $x;
            $this->setStatus(true);
            $this->depositar(150); //Sempre que abrir uma conta Poupança recebe 150 reais
        }
        
    }


    public function fecharConta(){
        if($this->saldo == 0){
            $this->getStatus(false);
        }
    }
    
    public function depositar($x){
        if ($this->status == "open"){
            $this->setSaldo($this->getSaldo() + $x);
        }
        else{
            echo "<p>Impossivel fazer a operação</p>";
        }
    }
    
    public function sacar($x){
        if ($this->status == "open"){
            if($this->saldo >= $x){
                $this->setSaldo($this->getSaldo() - $x);
            }
            else{
                echo "<p>Saldo insuficiente</p>";
            }  
        }
        else{
            echo "<p>Impossivel fazer a operação</p>";
        }
    }

    public function pagarMensal(){
        if ($this->status == "open"){
            if ($this->tipo == "cp"){
                $this->saldo -= 20;  
            }
            if ($this->tipo == "cc"){
                $this->saldo -= 13;
            }
        }
        else{
            echo "<p>Impossivel fazer a operação</p>";
        }
    }
    
    //---------GETEERS AND SETTERS---------//
    
    //numConta//
    public function getnumConta(){ //Retorna qual é o numero da conta
        if ($this->status == "open"){
            return $this->numConta;
        }
        else{
            echo "<p>Impossivel fazer a operação</p>";
        }
    }
    public function setnumConta($x){//Recebe o Numero da Conta
        if ($this->status == "open"){
            $this->numConta = $x;
        }
        else{
            echo "<p>Impossivel fazer a operação</p>";
        }
    } 
    
    //tipo//
    public function getTipo(){//Retorna o Tipo da conta
        if ($this->status == "open"){
            return $this->tipo;
        }
        else{
            echo "<p>Impossivel fazer a operação</p>";
        }
    } 
    public function setTipo($x){// Recebe o Tipo da conta
        if ($this->status == "open"){
            $this->Tipo = $x;
        }
        else{
            echo "<p>Impossivel fazer a operação</p>";
        }
    } 
    
    //Dono//
    public function getDono(){//Retorna o nome do Dono da Conta
        if ($this->status == "open"){
            return $this->dono;
        }
        else{
            echo "<p>Impossivel fazer a operação</p>";
        }
    } 
    public function setDono($x){// Recebe o nome do Dono da Conta
        if ($this->status == "open"){
            $this->dono = $x;
        }
        else{
            echo "<p>Impossivel fazer a operação</p>";
        }
    } 
    
    //Saldo//
    public function getSaldo(){//retorna o saldo da conta
        if ($this->status == "open"){
            return $this->saldo;
        }
        else{
            echo "<p>Impossivel fazer a operação</p>";
        }
    } 
    protected function setSaldo($x){//Recebe o Saldo da Conta (somente de outros metodos)
        if ($this->status == "open"){
            $this->saldo = $x;
        }
        else{
            echo "<p>Impossivel fazer a operação</p>";
        }
    } 
    
    //Status//
    public function getStatus(){//Retorna o status da conta
        return $this->status;
    }
    protected function setStatus($x){//Recebe o Status da Conta
        $this->status = $x;
    }
}