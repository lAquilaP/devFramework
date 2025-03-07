<?php
    include_once "../control/cadastro.php";
    include_once "logins.php";


    $tentativas = true;
    $acc = 0;
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];


    while($tentativas){
        if($nome == $adm->getNome() && $senha == $adm->getSenha() && $acc <= 3){
            header('Location: ../view/adm.php');
        } else if($nome == $aluno->getNome() && $senha == $aluno->getSenha() && $acc <= 3){
            header('Location: ../view/aluno.php');
        } else{
            $acc++;
            if($acc > 3){
                $tentativas = false;
                echo "NUMERO DE TENTATIVAS EXCEDIDO";
            }
        }
    }
?>