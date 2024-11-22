
<?php
require_once "conexao.php";
$conexao = conectar();

require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();

$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

$dados = '
<html>
<head>
<link rel="StyleSheet" type="Text/css" href="estilo.css">
<style>
body
 { font-family: Arial, sans-serif; }
h1
{
	color:#a1887f;
}
table {
  border-collapse: collapse;
  width: 100%;
}
td,th {
  text-align: left;
  padding: 10px;
}
tr:nth-child(even)
	{background-color: #f2f2f2}
thead 
{
  background-color: black;
  color: white;
}
</style>
</head>
<body>
';

$dados .= "<h1 style='text-align: center; text-decoration: underline; color: black;'> Relatorio de Pedidos </h1> ";

$dados .= "<table>
        <thead>
          <tr>
            <th>ID do pedido</th>
            <th>Nome</th>
            <th>Descricao</th>
		    <th>Categoria</th>             
          </tr>
        </thead>
        <tbody>";

$sql = "SELECT * FROM pedidos";
$result = executarSQL($conexao, $sql);
while ($info_pedido = mysqli_fetch_assoc($result)) {
    $dados .= "<tr>";
    $dados .= '<td>' . $info_pedido['id_pedido'] . '</td>';
    $dados .= '<td>' . $info_pedido['nome'] . '</td>';
    $dados .= '<td>' . $info_pedido['descricao'] . '</td>';
    $dados .= '<td>' . $info_pedido['categoria'] . '</td>';
    $dados .= "</tr>";
}
$dados .= "</tbody>";
$dados .= "</table>";
$dados .= "</body> </html>";


$dompdf->loadHtml($dados);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("relatorio.pdf", ["Attachment" => true]);
