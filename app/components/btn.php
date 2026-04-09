<?php
$class = $class ?? 'btn btn-primary';
$label = $label ?? '';
$href = isset($route) ? route($route) : ($url ?? '#');
?>

<a class="<?= e($class) ?>" href="<?= e($href) ?>">
  <?= e($label) ?>
</a>