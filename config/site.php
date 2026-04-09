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

  // IMPORTANT base pour les URL (ex: si le site est dans un sous-dossier, mettre '/mon-sous-dossier')
  'base' => '/maracujadigital/public',

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
    ['label' => 'Accueil', 'route' => 'home'],
    ['label' => 'Site web', 'route' => 'site-web'],
    ['label' => 'AMOA & Pilotage', 'route' => 'pilotage'],
    ['label' => 'Réalisations', 'route' => 'realisations'],
    ['label' => 'À propos', 'route' => 'a-propos'],
    ['label' => 'Contact', 'route' => 'contact'],
  ],

  // FOOTER ← AJOUT
  'footer' => [
    // baseline courte (optionnelle)
    'baseline' => 'Création de sites web et pilotage de projets digitaux.',
    // liens internes
    'links' => [
      [ 'label' => 'Mentions légales', 'route' => 'mentions-legales' ],
      [ 'label' => 'CGV', 'route' => 'cgv' ],
      [ 'label' => 'Contact', 'route' => 'contact' ],
    ],
    
    /*réseaux / externes (optionnel)*/
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
  /*tracking (ex: Google Analytics)*/
  'tracking' => [
    'ga_id' => null,
  ],

  'env' => 'dev',
];