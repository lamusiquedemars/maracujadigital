<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= e($page_title ?? $SEO['default_title']) ?></title>

<meta name="description" content="<?= e($page_description ?? $SEO['default_description']) ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?= e($page_title ?? $SEO['default_title']) ?>">
<meta property="og:description" content="<?= e($page_description ?? $SEO['default_description']) ?>">
<meta property="og:image" content="<?= url($ASSETS['default_image']) ?>">
<meta property="og:url" content="<?= url($_SERVER['REQUEST_URI'] ?? '') ?>">
<meta property="og:type" content="website">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">

<!-- Favicon -->
<link rel="icon" href="<?= url($ASSETS['favicon_path'] . 'favicon.ico') ?>">

<!-- CSS  -->
<link rel="stylesheet" href="<?= asset('css/site.css') ?>">
<link rel="stylesheet" href="<?= asset('css/fonts.css') ?>">