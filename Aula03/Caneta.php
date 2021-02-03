<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneta
 *
 * @author Alexandre XYZ
 */
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
 
    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>A caneta está tampada</p>";
        }
        else{
            echo "<p>A caneta está rabiscando</p>";
        }
    }
    private function tampar() {
        $this->tampada == true;
    }
    private function destampar() {
        $this->tampada == false;    
    }
}
