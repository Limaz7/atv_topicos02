<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD JS</title>
</head>

<body>
    <form onsubmit="return salvarPedido(event);">
        <label>ID: <input type="number" name="id_pedido"></label><br>
        <label>Nome: <input type="text" name="nome"></label><br>
        <label>Descrição: <input type="text" name="desc"></label><br>
        <label>Categoria: <input type="text" name="cat"></label><br>
        <input type="submit" value="Salvar Pedido">
    </form>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Categoria</th>
                <th colspan="2">Opções</th>
            </tr>
        </thead>
        <tbody id="pedidos"></tbody>
    </table>

    <script src="script.js"></script>
</body>

</html>