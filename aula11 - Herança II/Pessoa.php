<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author Alexandre XYZ
 */
 abstract class Pessoa {
    //atributos\\
    private $nome;
    private $idade;
    private $sexo;
    
    //metodos\\
    public final function FazerAniver(){
        $this->setIdade($this->getIdade()+1);
    }
    
    
    // getters e setter \\
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }


}
    