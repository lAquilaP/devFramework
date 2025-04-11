<?php

    require_once "../factory/conexao.php";

    if($_POST['cxvendedor'] != ""){
        $conn = new Caminho;
        $query = "INSERT INTO tbvendedor (vendedor) VALUES (:nome)";

        $cadastrar = $conn->getConn()->prepare($query);
        
        $cadastrar->bindParam(":nome", $_POST['cxvendedor'], PDO::PARAM_STR);
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