<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Livro
 *
 * @author Alunos
 */
class Livro {

    private $nome;
    private $autor;
    private $nPaginas;
    private $situacao;

    function __construct($nome, $autor, $nPaginas) {
        $this->nome = $nome;
        $this->autor = $autor;
        $this->nPaginas = $nPaginas;
    }

    public function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSituacao() {
        echo 'Situação do livro ' . $this->getNome() . ': ' . $this->situacao;
    }

}
