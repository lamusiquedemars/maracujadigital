<?php
$class = $props['class'] ?? 'btn btn-primary';
$label = $props['label'] ?? '';
$route = $props['route'] ?? null;

$href = $route ? route($route) : ($props['url'] ?? '#');
?>

<a class="<?= e($class) ?>" href="<?= e($href) ?>">
  <?= e($label) ?>
</a>