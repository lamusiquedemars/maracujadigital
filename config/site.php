<?php
$SITE = [

  // IDENTITÉ
  'name' => 'Maracuja Digital',
  'url' => 'https://maracujadigital.fr',
  'author' => 'Ivo Correia de Melo',

  // IMPORTANT
  'base' => '/maracujadigital',

  // SEO
  'seo' => [
    'default_title' => 'Maracuja Digital',
    'default_description' => 'Artisan de sites web modernes',
  ],

  // ASSETS
  'assets' => [
    'logo' => '/public/assets/img/logo.png', // ← AJOUT
    'default_image' => '/public/assets/img/og-default.jpg',
    'favicon_path' => '/public/assets/img/',
  ],

  // NAVIGATION ← AJOUT
  'navigation' => [
    ['label' => 'Accueil', 'url' => '/'],
    ['label' => 'Services', 'url' => '/services'],
    ['label' => 'Réalisations', 'url' => '/realisations'],
    ['label' => 'À propos', 'url' => '/a-propos'],
    ['label' => 'Contact', 'url' => '/contact'],
  ],

  // FOOTER ← AJOUT
  'footer' => [
    // baseline courte (optionnelle)
    'baseline' => 'Création de sites web et pilotage de projets digitaux.',
    // liens internes
    'links' => [
      [ 'label' => 'Mentions légales', 'url' => '/mentions-legales.php' ],
      [ 'label' => 'CGV', 'url' => '/cgv.php' ],
      [ 'label' => 'Contact', 'url' => '/contact.php' ],
    ],
    // réseaux / externes (optionnel)
    'socials' => [
      // exemple client
      // [ 'label' => 'Instagram', 'url' => 'https://instagram.com/xxx' ],
      // [ 'label' => 'LinkedIn', 'url' => 'https://linkedin.com/in/xxx' ],
    ],
  ],

  'tracking' => [
    'ga_id' => null,
  ],

  'env' => 'dev',
];