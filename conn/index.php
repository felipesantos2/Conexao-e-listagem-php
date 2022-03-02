<?php
include "conexao.php";
$pdo = conectar();

$tabela = "usuarios";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Acesse sua conta</h1>
    <form action="" method="post">
        <p>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
    
</body>
</html>