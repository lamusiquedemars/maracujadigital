<?php
$title = $props['title'] ?? 'Réalisations';
$items = $props['items'] ?? [];
?>

<section class="section">
  <div class="container container--wide">
    <h2><?= e($title) ?></h2>
    <div class="carousel carousel--cards">
      <?php foreach ($items as $item): ?>
        <article class="card carousel-item">
          <?php if (!empty($item['image'])): ?>
            <img
              src="<?= img($item['image']) ?>"
              alt="<?= e($item['title']) ?>"
              loading="lazy"
            >
          <?php endif; ?>
          <div>
            <h3><?= e($item['title']) ?></h3>
            <?php if (!empty($item['text'])): ?>
              <p><?= e($item['text']) ?></p>
            <?php endif; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>