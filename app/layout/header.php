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
          $itemUri = trim($item['url'], '/');
          $isActive = ($itemUri === '' && $currentUri === '') 
            || ($itemUri !== '' && str_starts_with($currentUri, $itemUri));
        ?>
          <li class="nav-item">
            <a href="<?= $base . $item['url'] ?>" 
               class="nav-link <?= $isActive ? 'is-active' : '' ?>">
              <?= $item['label'] ?>
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
        <li>
          <a href="<?= $base . $item['url'] ?>">
            <?= $item['label'] ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>