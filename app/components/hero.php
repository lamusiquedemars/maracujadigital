<?php
// ==========================
// HERO COMPONENT
// ==========================
// Texte principal (titre)
$title = $props['title'] ?? '';
// Surtitre optionnel
$eyebrow = $props['eyebrow'] ?? '';
// Sous-titre / description
$subtitle = $props['subtitle'] ?? '';
// Lien du bouton (optionnel)
$link = $props['link'] ?? null;
// Texte du bouton
$label = $props['label'] ?? 'Voir';

// Classes additionnelles passées depuis le render()
// ex: ['hero--page', 'hero--center']
$class = $props['class'] ?? '';
$class = is_array($class) ? implode(' ', $class) : $class;
// Construction des classes finales : base obligatoire + classes optionnelles
$classes = trim("hero section $class");
?>

<section class="<?= e($classes) ?>">
  <div class="container">
    <div class="hero__content">
      <!-- TITRE -->
      <?php if ($eyebrow): ?>
        <p class="hero__eyebrow"><?= e($eyebrow) ?></p>
      <?php endif; ?>
      <?php if ($title): ?>
        <h1 class="hero__title">
          <?= e($title) ?>
        </h1>
      <?php endif; ?>
      <!-- SUBTITLE -->
      <?php if ($subtitle): ?>
        <p class="hero__subtitle">
          <?= e($subtitle) ?>
        </p>
      <?php endif; ?>
      <!-- CTA -->
      <?php if ($link): ?>
        <div class="hero__actions">
          <a href="<?= e($link) ?>" class="btn btn-primary">
            <?= e($label) ?>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
