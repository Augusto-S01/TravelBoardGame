<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/base.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">


    <title>Home</title>
</head>
<body>
    <main>

        <div class="titulo-container">
            <h1 class="titulo__h1">Jogo da trilha</h1>
            <img class="titulo__imagem" src="./imagens/trilha.png" alt="imagem de uma trilha">
        </div>
        
        
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
                
                echo ("<div class='jogar'> <input class='jogar__botao' type='button' value='jogar'> </div>");
            }else{
                echo('<div class="jogar"><a href="cadastro.php"><input class="jogar__botao" type="button" value="faça seu cadastro para jogar"></a><a href="login.php"><h3 class="jogar__login">ja possui cadastro?</h3></a></div>');
            }
        ?>
            
        
        <div class="sobre">
            <h2 class="sobre__titulo">sobre</h2>
            <?php
                require("components/sobre.php");
            
            ?>
        </div>

        <?php
            if(isset($_SESSION['usuario'])){
                
                echo ("<div class='deslogar'> <a href='actions/sair.php'><input class='deslogar__botao' type='button' value='Finalizar Sessão'></a> </div>");
            }
        ?>
    </main>

    
</body>
</html>