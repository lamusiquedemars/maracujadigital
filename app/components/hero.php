<section class="hero">
  <h1><?= $title ?? '' ?></h1>
  <p><?= $subtitle ?? '' ?></p>

  <?php if (!empty($link)): ?>
    <a href="<?= $link ?>"><?= $label ?? 'Voir' ?></a>
  <?php endif; ?>
</section>