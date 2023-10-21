<?php
    if(!empty($_GET['id'])){

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM users WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){
            
            while($user_data = mysqli_fetch_assoc($result)){

            $nome = $user_data['nome'];
            $data_nasc = $user_data['data_nasc'];
            $cpf = $user_data['cpf'];
            $funcao = $user_data['funcao'];
            $data_entrada = $user_data['data_entrada'];
            $login = $user_data['login'];
            $senha = $user_data['senha'];
            
            }

        } else{

            header('location: sistema.php');

        }

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadastroFuncionario.css">
    <title>Cadastro de Funcionário</title>

    <style>
        
        #update{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #update:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>

</head>
<body>
<a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <label for="nome" >Adicionar uma foto </label>
                    <input type="file" name="file" id="file" class="inputUser" required>
                </div>
                <br> <br>
                <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br> <br>
                <div>
                    <label for="data_nascimento"> <b>Data de Nascimento </b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>" required>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf ?>" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="text" name="funcao" id="funcao" class="inputUser" value="<?php echo $funcao ?>" required>
                    <label for="nome" class="labelInput">Função</label>
                </div>
                <br> <br>
                <div>
                    <label for="nome"><b>Data de entrada </b></label>
                    <input type="date" name="data_entrada" id="data_entrada" value="<?php echo $data_entrada ?>" required>                    
                </div>
                    <br> <br>
                    <div class="inputBox">
                    <input type="text" name="login" id="login" class="inputUser" value="<?php echo $login ?>" required>
                    <label for="login" class="labelInput">Login</label>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="passoword" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br> <br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">

            </fieldset>
        </form>
    </div>
</body>
</html>