<!doctype html>
<html lang="fr">

<head>
  <?php require ROOT . '/app/metadata/head.php'; ?>
</head>

<body>

  <?php require ROOT . '/app/layout/header.php'; ?>

  <?php
  ob_start();
  require $view;
  $pageContent = ob_get_clean();
  ?>

  <main>
    <?= $pageContent ?>
  </main>

  <?php require ROOT . '/app/layout/footer.php'; ?>
  <?php require ROOT . '/app/metadata/scripts.php'; ?>

</body>
</html>