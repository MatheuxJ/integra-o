<?php

    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $data_nasc = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $funcao = $_POST['funcao'];
        $data_entrada = $_POST['data_entrada'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $sqlInsert = "UPDATE users 
        SET nome='$nome',data_nasc='$data_nasc',cpf='$cpf',funcao='$funcao',data_entrada='$data_entrada',login='$login',senha='$senha'
        WHERE id='$id'";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>