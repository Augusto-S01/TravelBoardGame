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
    
    <title>Cadastro</title>
</head>
<body>
    <main class="cadastro__main">
        <?php
            require("config/conexao.php");
        ?>

        <h1 class="cadastro__titulo">Cadastro</h1>
        <form class="cadastro__form" action="actions/cadastrar.php" method="post">
            <label for="login">Usuário</label>
            <input required value="teste" type="text" name="login" id="login">
            <label for="senha">senha</label>
            <input required value="teste" type="password" name="senha" id="senha">
            <input class="cadastro__botao" id="cadastro__botao" type="submit" value="Cadastrar">
        </form>
    </main>    
</body>
</html>