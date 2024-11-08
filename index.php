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
        <h1 class="center-align"> Pedidos </h1>

        <div class="card-panel">

            <form onsubmit="return salvarPedido(event);">

                <input type="hidden" name="id_pedido">

                <div class="input-field col s10 offset-s1">
                    <input type="text" placeholder="" id="nome" name="nome" class="validade" required>
                    <label for="nome">Nome</label>
                    <span class="helper-text" data-error="Campo com preenchimento obrigatório."></span>
                </div>

                <div class="input-field col s10 offset-s1">
                    <input type="text" placeholder="" id="desc" name="desc" class="validade" required>
                    <label for="desc">Descrição</label>
                    <span class="helper-text" data-error="Campo com preenchimento obrigatório."></span>
                </div>

                <div class="input-field col s10 offset-s1">
                    <input type="text" placeholder="" id="cat" name="cat" class="validade" required>
                    <label for="cat">Categoria</label>
                    <span class="helper-text" data-error="Campo com preenchimento obrigatório."></span>
                </div>

                <p class="center-align">
                    <input class="waves-light btn" style="background-color: black; color: white !important;" type="submit" value="Salvar Pedido">
                </p>

            </form>

        </div>
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