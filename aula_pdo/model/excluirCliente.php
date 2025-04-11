<?php
    require_once "../factory/conexao.php";
    $id = $_GET["id"];
    $conn = new Caminho;
    $query = "DELETE FROM tbCliente WHERE codcliente = :id";
    $resultado = $conn->getConn()->prepare($query);
    $resultado->bindParam(':id', $id);
    if($resultado->execute()){
        echo "
        <script>
            alert('Cliente excluido com sucesso!');
            window.location.href='../view/cadCliente.php';
        </script>
         ";
    } else{
        echo "
        <script>
            alert('ERRO!!!! Cliente NÃO Excluido!');
            window.location.href='../view/cadCliente.php';
        </script>
         ";
    }

?>