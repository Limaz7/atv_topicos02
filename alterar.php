<?php

require_once "conexao.php";
$conexao = conectar();

$pedidos = json_decode(file_get_contents("php://input"));




$sql = "UPDATE pedidos SET
        nome='$pedidos->nome', 
        descricao='$pedidos->descricao', 
        categoria='$pedidos->categoria'
        WHERE id_pedido=$pedidos->id_pedido";

executarSQL($conexao, $sql);

echo json_encode($pedidos);