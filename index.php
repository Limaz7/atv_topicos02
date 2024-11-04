<!DOCTYPE html>
<html lang="pt_BR">

<head>

    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>CRUD JS</title>
</head>

<body>
    <main class="container">
        <h1> Pedidos </h1>

        <form onsubmit="return salvarPedido(event);">
            <label>ID: <input type="number" name="id_pedido"></label><br>
            <label>Nome: <input type="text" name="nome"></label><br>
            <label>Descrição: <input type="text" name="desc"></label><br>
            <label>Categoria: <input type="text" name="cat"></label><br>
            <input style="color: white; background-color: black;" class="waves-effect waves-light btn" type="submit" value="Salvar Pedido">
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
    </main>

</body>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</html>