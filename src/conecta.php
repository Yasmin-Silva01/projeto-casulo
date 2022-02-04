<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "cadastro";

/* $servidor = "sql104.byethost4.com";
$usuario = "b4_30964317";
$senha = "2347yassan@";
$db = "b4_30964317_casulo"; */

try {
    $conexao = new PDO("mysql:host=$servidor; dbname=$db; charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die( "Erro: ".$e->getMessage() );
}

// var_dump($conexao);