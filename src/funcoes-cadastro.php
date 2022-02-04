<?php
require_once "conecta.php";


function inserirCadastro(PDO $conexao, string $nome):void {
    $sql = "INSERT INTO cadastro(nome) VALUES(:nome)";
    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
        $consulta->execute();
    } catch(Exception $erro){ 
        die( "Erro: " .$erro->getMessage());
    }
}


