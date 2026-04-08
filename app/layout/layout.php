<?php require_once ROOT . '/core/bootstrap.php'; ?>

<!doctype html>
<html lang="fr">

<head>
  <?php require ROOT . '/app/metadata/head.php'; ?>
</head>

<body>

  <?php
  require 'header.php';
  // capture de la page
  ob_start();
  require $view;
  $pageContent = ob_get_clean();
  ?>

  <main>
    <?= $pageContent ?>
  </main>

  <?php require 'footer.php'; ?>
  <?php require ROOT . '/app/metadata/scripts.php'; ?>

</body>
</html>