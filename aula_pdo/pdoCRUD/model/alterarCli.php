<?php
    require_once "../factory/conexao.php";
    $conn = new Caminho;
    if (isset($_POST['editar'])) {
        $query = "
            UPDATE tbcliente SET cliente = :cliente,
            cpf = :cpf,
            codvendedor = :codvendedor
            WHERE
            codcli = :codcli";
        $resultado = $conn->getConn()->prepare($query);
        $resultado->bindParam(':cliente', $_POST['cxcliente']);
        $resultado->bindParam(':cpf', $_POST['cxcpf']);
        $resultado->bindParam(':codvendedor', $_POST['cxcodigovendedor']);

        $resultado->bindParam(':codcli', $_POST['cxcodigo']);
        if($resultado->execute()){
            echo "CLIENTE ALTERADO COM SUCESSO!!!";
        } else {
            echo "!!!ERRO: CLIENTE NÃO ALTERADO !!!";
        }   
    } else{
        echo "ERRO 2345678";
    }
?>