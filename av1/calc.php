<?php
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $imc = $peso / ($altura * $altura);


    if($imc < 18.5){
        echo("SEU IMC ESTA BAIXO DEMAIS");

    } elseif($imc > 24.9){
        echo("SEU IMC ESTA ALTO DEMAIS");
    } else{
        echo("IMC IDEAL");

    }

?>