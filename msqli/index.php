<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
   
    <title>CRUD - cadastrar</title>
</head>
<body>
    <div class="container">
        <h1>Cadastrar Usuário</h1>
        <?php

            if(isset($_SESSION['msg'])){
                echo ($_SESSION['msg']);
                unset($_SESSION['msg']);
            }
        ?>
        <section class="forms">

            <form action="processa.php" method="post">
                <div class="campos">
                    <div class="input">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name" placeholder="Digite seu nome completo">
                    </div>
                
                    <div class="input">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu E-mail">
                    </div>
                    <input type="submit" value="cadastrar">
                </div>

            </form>
        </section>   
    </div>
</body>
</html>