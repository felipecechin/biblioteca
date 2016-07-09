<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Emprestimo
 *
 * @author Alunos
 */
class Emprestimo {

    private $aluno;
    private $livro;
    private $data;

    function __construct($aluno, $livro) {
        $this->PegarLivro($livro, $aluno);
    }

    function PegarLivro($livro, $aluno) {
        if (is_array($livro)) {
            for ($i = 0; $i < count($livro); $i++) {
                $this->livro[$i] = $livro[$i];
                $this->livro[$i]->setSituacao('emprestado');
            }
        } else {
            $this->livro = $livro;
            $this->livro->setSituacao('emprestado');
        }
        $this->aluno = (object) $aluno;
        date_default_timezone_set('America/Sao_Paulo');
        $this->data = date('d/m/Y H:i:s');
    }

    function DevolverLivro() {
        if (is_array($this->livro)) {
            for ($i = 0; $i < count($this->livro); $i++) {
                $this->livro[$i]->setSituacao('disponível');
            }
        } else {
            $this->livro->setSituacao('disponível');
        }
    }

    function DadosEmprestimo() {
        echo 'Aluno: ' . $this->aluno->getNome();
        echo '<br>';
        if (is_array($this->livro)) {
            echo 'Livros emprestados:';
            echo '<br>';
            for ($i = 0; $i < count($this->livro); $i++) {
                echo '- ' . $this->livro[$i]->getNome();
                echo '<br>';
            }
        } else {
            echo 'Livro emprestado: ' . $this->livro->getNome();
        }
    }

}
