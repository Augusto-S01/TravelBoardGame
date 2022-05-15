<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style/reset.css">


    <title>Login</title>
</head>
<body>
    <?php
        require("config/conexao.php");
    ?>

    <h1>Login</h1>
    <form action="actions/logar.php" method="post">
        <label for="login">Login</label>
        <input required value="teste" type="text" name="login" id="login">
        <label for="senha">senha</label>
        <input required value="teste" type="password" name="senha" id="senha">

        <input type="submit" value="Logar">
    </form>
</body>
</html>