<?php
$title = $title ?? 'Réalisations';
$items = $items ?? [];
?>

<section class="section section-realisations">
  <div class="container">

    <h2><?= e($title) ?></h2>

    <div class="carousel">

      <?php foreach ($items as $item): ?>

        <article class="card carousel-item">

          <?php if (!empty($item['image'])): ?>
            <img
              src="<?= img($item['image']) ?>"
              alt="<?= e($item['title']) ?>"
              loading="lazy"
            >
          <?php endif; ?>

          <div class="card-content">
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