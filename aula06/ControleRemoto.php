<!DOCTYPE html>
    <head>
        <style>
            .c{
                float: left;
            }
            .x{
                float: right;
                background-color: lightblue;
            }
        </style> 
    </head>
<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    //-----Atributos-----//
    private $ligado;
    private $tocando;
    private $volume;
    
    //-----Metodo padrão-----//
    public function __construct(){
        $this->setVolume(50);
        $this->setLigado(False);
        $this->setTocando(false);
    }
    
    //-----Metodos GET e SET-----//
    
    //Ligado//
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($x){
        $this->ligado = $x;
    }
    
    //Tocando//
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($x){
        $this->tocando = $x;
    }
    
    //Volume//
    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($x){
        $this->volume = $x;
    }
    
    //-----Metodos-----//
    
    //ligar
    public function Ligar(){
        $this->setLigado(true);
    }
    
    //desligar
    public function desligar(){
        $this->setLigado(false);
    }
    
    //abrir menu
    Public function abrirMenu(){
        if ($this->getLigado() == true){
            
            //Começo do Menu
            echo "<h4> ------------Menu------------ </h4>";
            
            //Mostra se está ligado SIM OU NÃO
            echo "<br> Está ligado?" . ($this->getLigado()?"SIM" : "NÃO" );
            
            //Mostra se tá tocando SIM OU NÃO
            echo "<br> <div class=a> Está tocando?" . ($this->getTocando()?"SIM" : "NÃO"). "</div>";
            
            //Faz com que mostre o volume atual e mostra o volume em forma visual
            for ($i = 0; $i!= $this->getVolume(); $i += 5){
                if ($i == 0){
                    echo  "<div class=c>" . "<br> Volume: " . $this->getVolume() . "%" . "<div class=x>"; 
                }
            echo" ";
            }
                echo "</div> </div><br>"; //. $this->menuVolume() . "</div>";
            
            //Fim do Menu
            echo "<h4> ---------------------------- </h4>";
        }
    }
    
    //fechar menu
    public function fecharMenu(){
        if ($this->getLigado() == true){
            echo "Fechando menu...";
            
            
        }
    }
    
    //mais volume
    public function maisVolume(){
        if ($this->getLigado() == true){
            $this->setVolume($this->getVolume() + 5);
        }
        
    }
    
    //menos volume
    public function menosVolume(){
        if ($this->getLigado() == true){
            $this->setVolume($this->getVolume() - 5);
        }    
    }
    
    //ligar mudo
    public function ligarMudo(){
        if ($this->getLigado() == true && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    
    //desligar mudo
    public function desligarMudo(){
        if ($this->getLigado() == true && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    
    //play
    public function play(){
        if ($this->getLigado() == true && $this->getTocando() == false){
            $this->setTocando(true); 
        }
    }
    
    //pause
    public function pause(){
        if ($this->getLigado() == true && $this->getTocando() == true){
            $this->setTocando(false);
        }
    }
}