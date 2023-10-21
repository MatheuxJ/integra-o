<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['nome'];
        $data_nasc = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $funcao = $_POST['funcao'];
        $data_entrada = $_POST['data_entrada'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO users(nome, data_nasc, cpf, funcao, data_entrada, login, senha) 
        VALUES ('$nome','$data_nasc','$cpf','$funcao','$data_entrada', '$login', '$senha')");

        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadastroFuncionario.css">
    <title>Cadastro de Funcionário</title>
</head>
<body>
<a href="home.php">Voltar</a>
    <div class="box">
        <form action="cadastroFuncionario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <label for="nome" >Adicionar uma foto </label>
                    <input type="file" name="file" id="file" class="inputUser" required>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br> <br>
                <div>
                    <label for="data_nascimento"> <b>Data de Nascimento </b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento"  required>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="text" name="funcao" id="funcao" class="inputUser" required>
                    <label for="nome" class="labelInput">Função</label>
                </div>
                <br> <br>
                <div>
                    <label for="nome"><b>Data de entrada </b></label>
                    <input type="date" name="data_entrada" id="data_entrada" required>                    
                </div>
                    <br> <br>
                    <div class="inputBox">
                    <input type="text" name="login" id="login" class="inputUser" required>
                    <label for="login" class="labelInput">Login</label>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="passoword" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br> <br>
                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>
    </div>
</body>
</html>