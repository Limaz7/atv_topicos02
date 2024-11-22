<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pedidos Inicio</title>
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
        <h1>Olá P. diddy</h1>

        <a href="formcadpedidos.php">Cadastrar pedidos</a>
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
                    <img src="img/telegram.webp" width="30">
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

</html>