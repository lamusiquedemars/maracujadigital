<?php
/**
 * Configuration du site
 * Toutes les données globales du site sont définies ici
 * (identité, SEO, navigation, etc.)
 *
 * Note : les données spécifiques à une page (ex: titre) sont définies dans le controller de la page
 */
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
  /*carousel réalisations*/
  'realisations' => [
    'title' => 'Réalisations',
    'items' => [
      [
        'type' => 'site',
        'title' => 'Site vitrine – luthier à Lyon',
        'text' => 'Réalisation d’un site vitrine pour un luthier à Lyon, conseil et structuration du contenu.',
        'image' => 'contempoluthiers.png'
      ],
      [
        'type' => 'deliverable',
        'title' => 'Modélisation de processus métier',
        'text' => 'Exemple de modélisation d’un workflow de statut clients.',
        'image' => 'process-workflow.png'
      ],
      [
        'type' => 'site',
        'title' => 'Site vitrine – archetier à Lyon',
        'text' => 'création de mon site vitrine d\'artisan, structuration du contenu.',
        'image' => 'atelierivoincidit.png'
      ]
    ]
  ],
  'tracking' => [
    'ga_id' => null,
  ],

  'env' => 'dev',
];