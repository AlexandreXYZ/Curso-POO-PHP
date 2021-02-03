<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author Alexandre XYZ
 */
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //atributos
    private $matricula;
    private $curso;
    
    //metodos
    public function cancelarMatricula() {
        $this->setMatricula(false);
    }
    
    //metodo padrão
//    function __construct($nome, $sexo, $idade, $matricula, $curso) {
//        $this->setMatricula($matricula);
//        $this->setCurso($curso);
//        $this->setIdade($idade);
//        $this->setSexo($sexo);
//        $this->setNome($nome);
//    }

    
    // metodos getters e setters
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    function setCurso($curso): void {
        $this->curso = $curso;
    }

        //put your code here
}
