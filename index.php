<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './Class/Emprestimo.class.php';
        require_once './Class/Livro.class.php';
        require_once './Class/Aluno.class.php';

        $aluno = new Aluno('Felipe', 201410095, 32212113);
        $livro1 = new Livro('Romances', 'Monteiro Lobato', 34);
        $livro2 = new Livro('Contos', 'Carlos Drumond', 34);
        $livros = array($livro1, $livro2);
        $emprestimo = new Emprestimo($aluno, $livros);
        $emprestimo->DadosEmprestimo();
        echo '<br>';
        $livro1->getSituacao();
        echo '<br>';
        $livro2->getSituacao();
        $emprestimo->DevolverLivro();
        echo '<br>';
        $livro1->getSituacao();
        echo '<br>';
        $livro2->getSituacao();
        
        echo '<br><br><br><br>';
        ?>
    </body>
</html>
