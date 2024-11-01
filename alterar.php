<?php

require_once "conexao.php";
$conexao = conectar();

$pedidos = json_decode(file_get_contents("php://input"));
$sql = "UPDATE pedidos SET
        nome='$pedidos->nome', 
        descricao='$pedidos->email', 
        categoria='$pedidos->senha'
        WHERE id_usuario=$pedidos->id_usuario";

executarSQL($conexao, $sql);

echo json_encode($usuario);