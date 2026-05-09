<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= e($page_title ?? $SEO['default_title']) ?></title>

<meta name="description" content="<?= e($page_description ?? $SEO['default_description']) ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?= e($page_title ?? $SEO['default_title']) ?>">
<meta property="og:description" content="<?= e($page_description ?? $SEO['default_description']) ?>">
<meta property="og:image" content="<?= url($page_image ?? $ASSETS['default_image']) ?>">
<meta property="og:url" content="<?= url($uri ?? '') ?>">
<meta property="og:type" content="website">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">

<!-- Favicon -->
<link rel="icon" href="<?= asset('images/favicon.ico') ?>">
<!-- CSS  -->
<link rel="stylesheet" href="<?= asset('css/base.css') ?>">
<link rel="stylesheet" href="<?= asset('css/theme.css') ?>">
<link rel="stylesheet" href="<?= asset('css/fonts.css') ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />