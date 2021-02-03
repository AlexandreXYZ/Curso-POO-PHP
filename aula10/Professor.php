<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Professor
 *
 * @author Alexandre XYZ
 */
require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $especialidade;
    private $salario;
    
    public function ReceberSalario(){
        $this->setSalario(1000);
    }
    
//    function __construct($nome, $sexo, $idade, $especialidade, $salario) {
//        $this->setEspecialidade($especialidade);
//        $this->setSalario($salario);
//        $this->setIdade($idade);
//        $this->setSexo($sexo);
//        $this->setNome($nome);
//    }

    
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario): void {
        $this->salario = $salario;
    }


}
