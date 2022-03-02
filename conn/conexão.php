<?php
   
function conectar(){
    $local_serve = "localhost";
    $usuario_serve = "root";
    $senha_serve = "";
    $banco_de_dados = "imports";

    try{
        $pdo = new PDO("mysqli:host=$local_serve","dbname=$banco_de_dados", $usuario_serve, $senha_serve);
        $pdo->exec("SET CHARSET SET utf8");
         
    } catch(\Throwable $th){
            return $th;
            die;

    }

    return $pdo;
        
}