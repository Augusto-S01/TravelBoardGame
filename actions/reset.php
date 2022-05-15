<?php
    setcookie("jogador1", 1, -3600 ,"/");
    setcookie("jogador2", 1, -3600 ,"/");
    setcookie("rodada", 1, -3600 ,"/");
    setcookie("inicio", true, -3600 ,"/");

    header("Location: ../jogo.php");
?>