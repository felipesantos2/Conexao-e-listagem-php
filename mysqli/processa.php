<?php
    session_start();
    include_once "conexao.php";

    $dado1 = filter_input(INPUT_POST, 'name');
    $dado2 = filter_input(INPUT_POST, 'email');

    $nome = htmlspecialchars($dado1);
    $email = htmlspecialchars($dado2);

    // echo "Nome: $nome<br>";
    // echo "E-mail: $email";

    $sql = "INSERT INTO usuarios( nome , email, created) VAlUES ('$nome','$email', NOW())";
    $resultado_usuario = mysqli_query($conn, $sql);

    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = '<p id="descricao">O Usuário foi cadastrado com sucesso.<p>';
        header('Location: index.php');
        
    } else {
        $_SESSION['msg'] = '<p id="descricao2">O Usuário não foi cadastrado com sucesso.<p>';
        header('Location: index.php');

    }

    