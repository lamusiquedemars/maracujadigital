<?php
$footer = $SITE['footer'] ?? [];
$siteName = $SITE['name'] ?? '';
$links = $footer['links'] ?? [];
$socials = $footer['socials'] ?? [];
$baseline = $footer['baseline'] ?? null;
?>

<footer class="site-footer">
  <div class="container footer-inner">

    <div class="footer-brand">
      <p class="footer-name">
        &copy; <?= date('Y') ?> <?= e($siteName) ?>
      </p>

      <?php if ($baseline): ?>
        <p class="footer-baseline">
          <?= e($baseline) ?>
        </p>
      <?php endif; ?>
    </div>

    <?php if (!empty($links)): ?>
      <nav class="footer-nav small" aria-label="Footer navigation">
        <?php foreach ($links as $i => $item): ?>
          <?php
            $href = isset($item['route'])
              ? route($item['route'])
              : url($item['url'] ?? '/');
          ?>
          <a href="<?= e($href) ?>">
            <?= e($item['label']) ?>
          </a>
          <?php if ($i < count($links) - 1): ?>
            <span>•</span>
          <?php endif; ?>
        <?php endforeach; ?>
      </nav>
    <?php endif; ?>

    <?php if (!empty($socials)): ?>
      <nav class="footer-socials" aria-label="Réseaux sociaux">
        <?php foreach ($socials as $item): ?>
          <?php if (!empty($item['url'])): ?>
            <a href="<?= e($item['url']) ?>"
               target="_blank"
               rel="noopener noreferrer">
              <?= e($item['label'] ?? '') ?>
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </nav>
    <?php endif; ?>

  </div>
</footer>