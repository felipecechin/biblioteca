<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author Alunos
 */
class Aluno {

    private $nome;
    private $matricula;
    private $telefone;
    
    function __construct($nome, $matricula, $telefone) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->telefone = $telefone;
    }
    function getNome() {
        return $this->nome;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

}
