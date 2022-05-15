<?php
    require "../config/conexao.php";


    if(isset($_POST['login']) && isset($_POST['senha'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM cadastros WHERE usuario = '$login' AND senha = '$senha'";
        $resultado = $pdo->query($sql);

        if($resultado -> rowCount() > 0){
            session_start();
            $_SESSION['usuario'] = $login;
            echo("<script>
            alert('Bem vindo $login');
            window.location.href = '../index.php';
            </script>");
        }else {
            echo("<script>
            alert('Login não existe');
            window.location.href = '../login.php';
            </script>");
        }

    }
?>
    