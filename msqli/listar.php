<?php
session_start();
include_once "conexao.php"
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">

    <title>CRUD - Listar</title>
</head>

<body>
    <div class="container">
        <a href="index.php"> Cadastrar</a>
        <a href="listar.php"> Listar</a>
        <h1>Listar Usuário</h1>
        <?php

        if (isset($_SESSION['msg'])) {
            echo ($_SESSION['msg']);
            unset($_SESSION['msg']);
        }

        // Receber o Número da Página

        $paginacao = filter_input(INPUT_GET, 'pagina');
        $pagina_atual = htmlspecialchars($paginacao);

        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

        // setar a quntidade de itens da pagina
        $quant_result_pga  = 2;

        // calcular o inicio da visualização
        $inicio = ($pagina * $quant_result_pga) - $quant_result_pga;

        $result_usuarios = "SELECT * FROM usuarios LIMIT $inicio, $quant_result_pga";
        $resultado_usuarios = mysqli_query($conn, $result_usuarios);
        // Percorre as linhas da tabela
        while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
            echo "ID:" . $row_usuario['id'] . "<br>";
            echo "NOME:" . $row_usuario['nome'] . "<br>";
            echo "E-mail:" . $row_usuario['email'] . "<br><hr>";
        }

        // paginacao
        $result_pg = "SELECT COUNT(id) AS num_result FROM usuarios";
        $resultado_pg = mysqli_query($conn, $result_pg);
        $row_pg = mysqli_fetch_assoc($resultado_pg);
        // echo $row_pg['num_result'];
        $quantidade_pg = ceil($row_pg['num_result'] / $quant_result_pga);

        $max_links = 2;
        echo "<a href ='listar.php?pagina=1'> Primeira</a>";

        for ($pagina_ant = $pagina - $max_links; $pagina_ant <= $pagina - 1; $pagina_ant++) {
            if($pagina_ant >= 1){
                echo "<a href ='listar.php?pagina=$pagina_ant'>$pagina_ant</a>";
            }
        }

        echo "$pagina";
        for($pagina_dep = $pagina + 1; $pagina_dep <= $pagina + $max_links; $pagina_dep++){

            if ($pagina_ant <= $quantidade_pg) {
                echo "<a href ='listar.php?pagina=$pagina_dep'>$pagina_dep</a>";
            }

        }

        echo "<a href ='listar.php?pagina=$quantidade_pg'> Ultima</a>";

        ?>
    </div>
</body>

</html>