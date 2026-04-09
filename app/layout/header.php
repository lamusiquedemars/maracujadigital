<?php
// =======================
// RÉCUP CONFIG
// =======================
$siteName = $SITE['name'] ?? 'Site';

// Navigation
$navItems = $SITE['navigation'] ?? [];

// URI courante (propre)
$currentUri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/', '/');
?>

<header class="site-header">
  <div class="container container--header header-inner">

    <!-- Logo -->
    <div class="header-brand">
      <a href="<?= route('home') ?>">
        <img src="<?= asset('img/logo.png') ?>" alt="<?= e($siteName) ?>" class="brand-logo">
      </a>
    </div>

    <!-- Navigation desktop -->
    <nav class="nav-primary">
      <ul class="nav-list">
        <?php foreach ($navItems as $item): ?>
          <?php
            // 1. URL
            $href = isset($item['route'])
              ? route($item['route'])
              : url($item['url'] ?? '/');
            // 2. ROUTE CLEAN (source de vérité)
            $itemPath = trim(parse_url($href, PHP_URL_PATH) ?? '/', '/');
            // 3. ACTIVE SIMPLE & STABLE
            $isActive = ($itemPath === $currentUri);
          ?>
          <li class="nav-item">
            <a href="<?= e($href) ?>"
               class="nav-link <?= $isActive ? 'is-active' : '' ?>">
              <?= e($item['label']) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>

    <!-- Burger -->
    <button class="nav-toggle" aria-label="Menu" aria-expanded="false">
      <span class="nav-toggle-bar"></span>
      <span class="nav-toggle-bar"></span>
      <span class="nav-toggle-bar"></span>
    </button>

  </div>

  <!-- Mobile -->
  <nav class="nav-mobile">
    <ul class="nav-mobile-list">

      <?php foreach ($navItems as $item): ?>

        <?php
          $href = isset($item['route'])
            ? route($item['route'])
            : url($item['url'] ?? '/');
        ?>

        <li>
          <a href="<?= e($href) ?>">
            <?= e($item['label']) ?>
          </a>
        </li>

      <?php endforeach; ?>

    </ul>
  </nav>
</header>