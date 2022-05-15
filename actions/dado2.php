<?php
    session_start();
    $dado = rand(1, 6);
    $casaAtual = $_COOKIE['jogador2'];
    $casaAtual += $dado;
    if($casaAtual > 79){
        $casaAtual = 79;
    }
    $_COOKIE['jogador2'] = $casaAtual;
    setcookie("jogador2", $casaAtual ,time() + (30 * 24 * 3600),"/");
    setcookie("dado", $dado ,time() + (30 * 24 * 3600),"/");
    header("Location: ../jogo.php");
?>