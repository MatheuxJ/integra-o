<?php 
    session_start();
   // print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])){
        include_once('config.php');
        $login = $_POST['login'];
        $senha = $_POST['senha'];

       /* print_r('login:' .$login);
        print_r('<br');
        print_r('senha:' .$senha); */

        $sql = "SELECT * FROM users WHERE login = '$login' and senha = '$senha'";

        $result = $conexao->query($sql);

       // print_r($result);

       if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
        }
    }
        else
        {
        header('Location: login.php');
    }

?>