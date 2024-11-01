<?php

require_once "conexao.php";
$conexao = conectar();

$pedidos = json_decode(file_get_contents("php://input"));
$sql = "INSERT INTO pedidos 
        (nome, descricao, categoria)
        VALUES 
        ('$pedidos->nome', 
        '$pedidos->descricao', 
        '$pedido->categoria')";

executarSQL($conexao, $sql);

$pedidos->id_pedido = mysqli_insert_id($conexao);
echo json_encode($pedidos);