<?php
    require "../config/conexao.php";


    if(isset($_POST['login']) && isset($_POST['senha'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM cadastros WHERE usuario = '$login'";
        $resultado = $pdo->query($sql);

        if($resultado -> rowCount() > 0){
            echo("<script>
                alert('Login já existe');
                window.location.href = '../cadastro.php';
                </script>");
        }else {
            $sql = "INSERT INTO cadastros (usuario, senha) VALUES ('$login', '$senha')";
            $resultado = $pdo->query($sql);

            session_start();
            $_SESSION['usuario'] = $login;
            echo("<script>
            alert('Login criado com sucesso');
            window.location.href = '../index.php';
            </script>");
        }

    }
?>
    