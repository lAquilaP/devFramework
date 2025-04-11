<?php

    require_once "../factory/conexao.php";

    if (($_POST['cxnome'] != "") && ($_POST['cxcpf'] != "")){
        
        $conn = new Caminho;
        $query = "INSERT INTO tbcliente (cliente, cpf) VALUES (:nome, :cpf)";

        $cadastrar = $conn->getConn()->prepare($query);

        $cadastrar->bindParam(":nome", $_POST['cxnome'], PDO::PARAM_STR);
        $cadastrar->bindParam(":cpf", $_POST['cxcpf'], PDO::PARAM_INT);

        $cadastrar->execute();
        if($cadastrar->rowcount()){
            echo "Cadastrado com sucesso!";
        }
        else{
            echo "Dados não cadastrados";
        }
    }
    else{
        echo "Dados incompletos.";
    }

?>