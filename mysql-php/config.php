<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassoword = '';
    $dbName = 'formulario-cadastro';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassoword, $dbName);

    /*
    if($conexao->connect_errno){
        echo "Erro";
    }

    else{
        echo "Conexão com sucesso";
    }
*/
?>
