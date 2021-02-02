<?php
require_once 'Lutador.php';
class Luta {
    
//----Atributos----\\
    private Lutador $desafiante;
    private Lutador $desafiado;
    private int $raunds;
    private bool $aprovado;
    
//----Metodos----\\
    public function marcarLuta($lutador_1, $lutador_2){
        $this->setDesafiante($lutador_1);
        $this->setDesafiado($lutador_2);
        if($this->desafiante->getCategoria() == $this->desafiado->getCategoria() && $this->desafiante <> $this->desafiado){
            $this->setAprovado(true);
        }
    }
    
    public function Lutar(){
        if($this->getAprovado() == true){
            $this->desafiado->apresentar();
            echo "<br></br>";
            $this->desafiante->apresentar();
            $resultado = rand(1,3);
            if($resultado == 1){
                print("<h3>E O VENCEDOR FOII " . $this->desafiante->getNome() . "</h3>");
                $this->desafiante->ganharLuta();
                $this->desafiado->perderLuta();
            }
            if($resultado == 2){
                print("<h3>E O VENCEDOR FOII " . $this->desafiado->getNome() . "</h3>");
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
            }
            if($resultado == 3){
                print("<h3>EMPATEEE</h3>");
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
            }
        }
        if($this->getAprovado() == false){
            echo("ESSA LUTA NÃO FOI APROVADA");
        }
    }
//----Metodos Getters e Setters----\\
    #desafiante
    private function getDesafiante() {
        return $this->desafiante;
    }
    private function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }
    
    #desafiado
    private function getDesafiado() {
        return $this->desafiado;
    }
    private function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    #Raunds
    private function getRaunds() {
        return $this->raunds;
    }
    private function setRaunds($raunds): void {
        $this->raunds = $raunds;
    }

    #Aprovada
    private function getAprovado() {

        return $this->aprovado;
    }
    private function setAprovado($aprovado): void {
        $this->aprovado = $aprovado;
    }
}