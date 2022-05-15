<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style/reset.css">

    <title>Cadastro</title>
</head>
<body>
    <?php
        require("config/conexao.php");
    ?>

    <h1>Cadastro</h1>
    <form action="actions/cadastrar.php" method="post">
        <label for="login">Login</label>
        <input required value="teste" type="text" name="login" id="login">
        <label for="senha">senha</label>
        <input required value="teste" type="password" name="senha" id="senha">

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>