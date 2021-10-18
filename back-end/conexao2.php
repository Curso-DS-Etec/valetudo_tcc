<?php
    $server = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "tcc";

    try{
        $con = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        //echo "Ocorreu um erro de conexao: {$erro->getMessage()}";
        $con = null;
    }
?>