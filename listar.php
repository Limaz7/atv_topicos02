<?php

require_once "conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM pedidos";
$resultado = executarSQL($conexao, $sql);
$pedidos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
echo json_encode($pedidos);