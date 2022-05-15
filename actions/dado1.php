<?php
    session_start();
    $dado = rand(1, 6);
    $casaAtual = $_COOKIE['jogador1'];
    $casaAtual += $dado;
    if($casaAtual > 79){
        $casaAtual = 79;
    }
    $_COOKIE['jogador1'] = $casaAtual;
    setcookie("jogador1", $casaAtual ,time() + (30 * 24 * 3600),"/");
    echo("<script> console.log('".$_COOKIE['jogador1']."')</script>");
    echo("<script> console.log('".$_COOKIE['jogador1']."')</script>");
    header("Location: ../jogo.php");




?>