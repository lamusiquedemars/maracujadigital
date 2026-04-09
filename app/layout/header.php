<?php
// =======================
// RÉCUP CONFIG
// =======================
$siteName = $SITE['name'] ?? 'Site';
$logoPath = $SITE['assets']['logo'] ?? '/public/assets/img/logo.svg';
$base = $SITE['base'] ?? '';

// Navigation
$navItems = $SITE['navigation'] ?? [];

// URI courante
$currentUri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
?>

<header class="site-header">
  <div class="container container--header header-inner">

    <!-- Logo -->
    <div class="header-brand">
      <a href="<?= $base ?>/">
        <img src="<?= $base . $logoPath ?>" alt="<?= $siteName ?>" class="brand-logo">
      </a>
    </div>

    <!-- Navigation desktop -->
    <nav class="nav-primary">
      <ul class="nav-list">
        <?php foreach ($navItems as $item): 
          $href = isset($item['route'])
            ? route($item['route'])
            : url($item['url'] ?? '/');
          $itemUri = trim(parse_url($href, PHP_URL_PATH), '/');
          $isActive = ($itemUri === $currentUri);
        ?>
          <li class="nav-item">
            <a 
              href="<?= e($href) ?>" 
              class="nav-link <?= $isActive ? 'is-active' : '' ?>"
            >
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
      <?php foreach ($navItems as $item): 
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