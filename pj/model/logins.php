<?php
    include_once "../control/cadastro.php";
    
    $adm = new Cadastro;

    $adm -> setNome("Professor");
    $adm -> setSenha("123");
    echo "Nome" . $adm->getNome();
    echo "Senha" . $adm->getSenha();
    $aluno = new Cadastro;

    $aluno -> setNome("Aluno");
    $aluno -> setSenha("321");
    echo "Nome" . $aluno->getNome();
    echo "Senha" . $aluno->getSenha();
?>