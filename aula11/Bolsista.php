<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bolsista
 *
 * @author Alexandre XYZ
 */
require_once 'Aluno.php';
class Bolsista extends Aluno{
    
    private $Bolsa;
    
    public function RenovarBolsa() {
        echo "Bolsa Renovada";
    }
    public function PagarMensalidade() {
        Echo "Pagando Mensalidade da Bolsa...";
    }
    function getBolsa() {
        return $this->Bolsa;
    }
    function setBolsa($Bolsa): void {
        $this->Bolsa = $Bolsa;
    }
}
