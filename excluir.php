<?php

$id_pedido = $_GET['id_pedido'];

require_once "conexao.php";
$conexao = conectar();
$sql = "DELETE FROM pedidos WHERE id_pedido = '$id_pedido'";
$retorno = executarSQL($conexao, $sql);
echo json_encode($retorno);