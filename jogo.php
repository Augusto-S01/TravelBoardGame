<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/jogo.css">
    <link rel="stylesheet" href="style/base.css">
    <title>Jogo</title>
</head>
<body>


<?php
    session_start();


    if(!isset($_COOKIE['inicio'])){
        setcookie("jogador1", 1,time() + (30 * 24 * 3600),"/");
        setcookie("jogador2", 1,time() + (30 * 24 * 3600),"/");
        setcookie("inicio", true);
        echo ("<script> console.log('teste')</script>");
    }

    echo ("<script> console.log('".$_COOKIE['jogador1']."')</script>");
?>

<div class="jogo">
    <ul class="jogo-casas-container">
    
        <?php
            $casas = array(79);
            for($i = 0; $i < 79; $i++){

                if($_COOKIE['jogador1'] == $i+1 && $_COOKIE['jogador2'] == $i+1){
                    echo("<li id='casa".($i+1)."' class='casa'><p>".($i+1)."</p><span class='jogador1'></span><span class='jogador2'></span> </li>");
                }else if($_COOKIE['jogador1'] == $i+1){
                    echo("<li id='casa".($i+1)."' class='casa'><p>".($i+1)."</p><span class='jogador1'></span> </li>");
                }else if($_COOKIE['jogador2'] == $i+1){
                    echo("<li id='casa".($i+1)."' class='casa'><p>".($i+1)."</p><span class='jogador2'></span> </li>");
                }else{
                    echo("<li id='casa".($i+1)."' class='casa'><p>".($i+1)."</p><span></span> </li>");
                }
            }
        ?>
    </ul>

    <div class="jogo-rodada-container">
        <div class="jogo-rodada">
            <h2 class="jogo-rodada__titulo">Rodada</h2>
            <p class="jogo-rodada__numero">1</p>

            <form action="actions/dado1.php" method="post">
                <input class="jogo-rodada__botao" type="submit" value="Jogar1">
            </form>
            <form action="actions/dado2.php" method="post">
                <input class="jogo-rodada__botao" type="submit" value="Jogar2">
            </form>
            
        </div>

</div>




</body>
</html>