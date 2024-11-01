<?php

$id_pedido = $_GET['id_pedido'];

require_once "conexao.php";
$conexao = conectar();

$sql = "SELECT id_pedido, nome, descricao, categoria  FROM pedidos 
        WHERE id_pedido = $id_pedido";
$resultado = executarSQL($conexao, $sql);
$pedidos = mysqli_fetch_assoc($resultado);
echo json_encode($pedidos);