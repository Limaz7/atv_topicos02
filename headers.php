<?php
$paginaCorrente = basename($_SERVER['SCRIPT_NAME']);
//echo $pagina_corrente;
?>

<div class="navbar-fixed">
  <nav class="black">
    <div class="nav-wrapper container">
      <ul class="right hide-on-med-and-down">
        <?php if ($paginaCorrente != "index.php"): ?>
        <li> <a class="white-text" href="index.php">Tela inicial</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>
</div>