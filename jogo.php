<!DOCTYPE html>
<html lang="pt_br">
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
        setcookie("rodada", 1,time() + (30 * 24 * 3600),"/");
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
            <?php
                
                switch ($_COOKIE['dado']) {
                    case 1:
                        echo "<img class='dado__img' src='./imagens/1_dot.png' alt='Dado de 1 ponto'>";
                        break;
                    case 2:
                        echo "<img class='dado__img' src='./imagens/2_dots.png' alt='Dado de 2 pontos'>";
                        break;
                    case 3:
                        echo "<img class='dado__img' src='./imagens/3_dots.png' alt='Dado de 3 pontos'>";
                        break;
                    case 4:
                        echo "<img class='dado__img' src='./imagens/4_dots.png' alt='Dado de 4 pontos'>";
                        break;
                    case 5:
                        echo "<img class='dado__img' src='./imagens/5_dots.png' alt='Dado de 5 pontos'>";
                        break;
                    case 6:
                        echo "<img class='dado__img' src='./imagens/6_dots.png' alt='Dado de 6 pontos'>";
                        break;
                    default:
                        echo "<img class='dado__img' src='./imagens/1_dot.png' alt='Dado de 1 ponto'>";
                        break;
                }

                if($_COOKIE['jogador1'] == 79 && $_COOKIE['jogador2'] == 79){
                    echo("<p class='jogo-rodada__vencedor'>Empate, ambos os jogadores Venceram!</p>");
                }else if($_COOKIE['jogador1'] == 79){
                    echo("<p class='jogo-rodada__vencedor'>Parabens jogador 1 você ganhou!</p>");
                }else if($_COOKIE['jogador2'] == 79){
                    echo("<p class='jogo-rodada__vencedor'>Parabens jogador 2 você ganhou!</p>");
                }else{
                    echo('<form action="actions/dado1.php" method="post"><input class="jogo-rodada__botao" type="submit" value="Jogar Dado jogador 1"></form>');
                    echo('<form action="actions/dado2.php" method="post"><input class="jogo-rodada__botao" type="submit" value="Jogar Dado jogador 2"></form>');
                }                
            ?>
            <form action="index.php" method="get"><input class="jogo-rodada__botao" type="submit" value="Voltar ao menu"></form>
            <form action="actions/reset.php" method="post">
                <input class="jogo-rodada__botao-reset" type="submit" value="Resetar Jogo">
            </form>
        </div>

</div>




</body>
</html>