<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author Alexandre XYZ
 */
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
    //atributos
    private $setor;
    private $trabalhando;
    
    //metodos
    public function mudarTrabalho($trabalhando) {
        $this->setTrabalhando($trabalhando);
    }
    
    //metodo padrao
    
    
    //metodos getters e setters
    function getSetor() {
        return $this->setor;
    }

    function getTrabalhando() {
        return $this->trabalhando;
    }

    function setSetor($setor): void {
        $this->setor = $setor;
    }

    function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }



}
