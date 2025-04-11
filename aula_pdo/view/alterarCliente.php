<?php
    require_once "../factory/conexao.php";
    $conn = new Caminho;
    $id = $_GET['id'];
    $query = "SELECT *FROM tbCliente WHERE codcliente = :id";
    $resultado = $conn->getConn()->prepare($query);
    $resultado->bindParam(':id', $id);
?>