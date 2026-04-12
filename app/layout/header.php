<?php
$siteName = $SITE['name'] ?? 'Site';
$navItems = $SITE['navigation'] ?? [];

// URI courante fiable (vient de index.php)
$currentUri = $currentUri ?? '';

?>

<header class="site-header">
  <div class="container container--wide header-inner">

    <div>
      <a href="<?= route('home') ?>">
        <img src="<?= asset('img/logo.png') ?>" alt="<?= e($siteName) ?>" class="brand-logo">
      </a>
    </div>

    <nav class="nav-primary">
      <ul class="nav-list">
        <?php foreach ($navItems as $item): ?>
          <?php
            $href = isset($item['route'])
              ? route($item['route'])
              : url($item['url'] ?? '/');

            $itemPath = trim(parse_url($href, PHP_URL_PATH) ?? '/', '/');

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

    <button class="nav-toggle" aria-label="Menu" aria-expanded="false">
      <span class="nav-toggle-bar"></span>
      <span class="nav-toggle-bar"></span>
      <span class="nav-toggle-bar"></span>
    </button>

  </div>

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