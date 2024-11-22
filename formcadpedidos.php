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
<?php include("headers.php"); ?>

<style>
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }

    .font-italic {
        font-style: italic !important;
    }

    .aptor {
        font-size: .8em;
        color: silver;
    }

    .page-footer {
        color: #eaeaea !important;
        font-size: .9em;
    }
</style>

<body>
    <main class="container">

        <h1 class="center-align"> Pedidos </h1>

        <div class="card-panel">

            <form onsubmit="return salvarPedido(event);">

                <div class="input-field col s10 offset-s1">
                    <input id="id" name="id_pedido" type="text" disabled>
                    <label for="id">ID</label>
                </div>

                <div class="input-field col s10 offset-s1">
                    <input type="text" id="nome" name="nome" class="validade" required>
                    <label for="nome">Nome</label>
                    <span class="helper-text" data-error="Campo com preenchimento obrigatório."></span>
                </div>

                <div class="input-field col s10 offset-s1">
                    <input type="text" id="desc" name="desc" class="validade" required>
                    <label for="desc">Descrição</label>
                    <span class="helper-text" data-error="Campo com preenchimento obrigatório."></span>
                </div>

                <div class="input-field col s10 offset-s1">
                    <input type="text" id="cat" name="cat" class="validade" required>
                    <label for="cat">Categoria</label>
                    <span class="helper-text" data-error="Campo com preenchimento obrigatório."></span>
                </div>

                <p class="center-align">
                    <input class="waves-light btn" style="background-color: black; color: white !important;" type="submit" value="Salvar Pedido">
                </p>

            </form>
        </div>

        <div style="text-align: center;">Emitir PDF dos pedidos <br>
            <a href="relatorio.php" class="black waves-effect waves-light btn">Emitir pdf</a> <br><br>
        </div>

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

    <footer class="page-footer black">
        <div class="container">
            <div class="row center-align">
                <div class="col l4 s12">
                    <h5 class="">Trabalho de tópicos</h5>
                    <p class="font-italic aptor">Desenvolvido por Lázaro</p>
                </div>
                <div class="col l4 s12">
                    <p>
                    <h5 class="white-text">Institucional</h5>
                    </p>
                    <div class="grey-text text-lighten-4">Fale com nós<br></div>
                    <div class="grey-text text-lighten-4">Quem somos<br></div>
                    <div class="grey-text text-lighten-4">Perguntas frequentes<br></div>
                </div>
                <div class="col l4 s12">
                    <h5 class="white-text">Siga-nos</h5>
                    <img src="img/instagram.png" width="30">
                    <img src="img/tiktok.png" width="30">
                    <img src="img/telegram.png" width="30">
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div style="text-align: center;" class="container">
                © 2024 Copyright
            </div>
        </div>
    </footer>

</body>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</html>