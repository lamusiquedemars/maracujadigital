<?php
/*  Fichier de configuration du site
  Contient les informations globales du site, comme le nom, l'auteur, les liens de navigation, etc.
  Ces données sont accessibles dans les vues via la variable $SITE
*/
$SITE = [

  // ======================
  // IDENTITÉ
  // ======================
  'name' => 'Maracuja Digital',
  'author' => 'Ivo Correia de Melo',

  // ======================
  // SEO
  // ======================
  'seo' => [
    'default_title' => 'Maracuja Digital',
    'default_description' => 'Artisan de sites web modernes',
  ],

  // ======================
  // ASSETS (RELATIF UNIQUEMENT)
  // ======================
  'assets' => [
    'logo' => 'img/logo.png',
    'default_image' => 'img/og-default.jpg',
    'favicon_path' => 'img/',
  ],

  // ======================
  // NAVIGATION
  // ======================
  'navigation' => [
    ['label' => 'Accueil', 'route' => 'home', 'show_mobile' => false],
    ['label' => 'Site web', 'route' => 'site-web'],
    ['label' => 'AMOA & Pilotage', 'route' => 'pilotage'],
    /*['label' => 'Réalisations', 'route' => 'realisations'],
    ['label' => 'À propos', 'route' => 'a-propos'],*/
    ['label' => 'Contact', 'route' => 'contact'],
  ],

  // ======================
  // FOOTER
  // ======================
  'footer' => [
    'baseline' => 'Création de sites web et pilotage de projets digitaux.',
    'links' => [
      ['label' => 'Mentions légales', 'route' => 'mentions-legales'],
      ['label' => 'CGV', 'route' => 'cgv'],
      ['label' => 'Pourquoi avoir un site web', 'route' => 'pourquoi-site-web'],
      ['label' => 'Contact', 'route' => 'contact'],
    ],
    'socials' => [],
  ],

  // ======================
  // REALISATIONS
  // ======================
  'realisations' => [
    'title' => 'Réalisations',
    'items' => [
      [
        'type' => 'site',
        'title' => 'Site vitrine – luthier à Lyon',
        'text' => 'Réalisation d’un site vitrine, conseil et structuration du contenu.',
        'image' => 'contempoluthiers.png'
      ],
      [
        'type' => 'deliverable',
        'title' => 'Modélisation de processus métier',
        'text' => 'Exemple de modélisation d’un workflow de changement de statut.',
        'image' => 'process-workflow.png'
      ],
      [
        'type' => 'site',
        'title' => 'Site vitrine – archetier à Lyon',
        'text' => 'création de mon site vitrine d\'artisan.',
        'image' => 'atelierivoincidit.png'
      ]
    ]
  ],

  // ======================
  // TRACKING
  // ======================
  'tracking' => [
    'ga_id' => null,
  ],

];