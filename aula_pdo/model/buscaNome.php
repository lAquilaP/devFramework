<?php
    require_once "../factory/conexao.php";
    $cliente = $_POST['cxbusca'];
    $conn = new Caminho;
    $consulta= "SELECT * FROM tbCliente WHERE cliente = :cliente";
    $resultado = $conn->getConn()->prepare($consulta);
    $resultado->bindParam(':cliente', $cliente);
    $resultado->execute();
    $linha = $resultado->fetch (PDO::FETCH_ASSOC);


    if($linha){
        echo "<script>
        alert('Cliente Encontrado');
        </script>";
    }
    else{
        echo "<script>
        alert('Cliente Não Encontrado');
        </script>";
    }

?>
<div id="cxcliente">
    <?php 
        if($linha){
            echo $linha["cliente"]. "<br>";
            echo $linha["cpf"]. "<br>";
            echo $linha["codvendedor"]. "<br>";
        }
    ?>
    <a href="excluirCliente.php?id=<?php echo $linha['codcliente']?>">
    Excluir
    </a>
    <a href="">Alterar</a>
</div>