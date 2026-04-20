<?php
/*
  Fichier de configuration des routes de l'application
  Chaque route doit avoir une clé unique, un chemin d'URL, et une vue associée
  ex:
    'home' => [
      'path' => '',
      'view' => 'home',
      'title' => 'Accueil'
      'controller' => 'home' // optionnel, pour les routes dynamiques
    ]
*/
return [
  'home' => [
    'path' => '',
    'view' => 'home',
    'title' => 'Accueil',
    'controller' => 'home'
  ],
  'site-web' => [
    'path' => 'site-web',
    'view' => 'site-web',
    'title' => 'Site Web',
    'controller' => 'site-web'
  ],
  'pilotage' => [
    'path' => 'pilotage',
    'view' => 'pilotage',
    'title' => 'Pilotage',
    'controller' => 'pilotage'
  ],
  'a_propos' => [
    'path' => 'a-propos',
    'view' => 'a-propos',
    'title' => 'À propos',
    'controller' => 'a-propos'
  ],
  'contact' => [
    'path' => 'contact',
    'view' => 'contact',
    'title' => 'Contact',
    'controller' => 'contact'
  ],
  'mentions-legales' => [
    'path' => 'mentions-legales',
    'view' => 'mentions-legales',
    'title' => 'Mentions légales',
    'controller' => 'mentions-legales'
  ],
  'cgv' => [
    'path' => 'cgv',
    'view' => 'cgv',
    'title' => 'CGV',
    'controller' => 'cgv'
  ],
  'pourquoi-site-web' => [
    'path' => 'pourquoi-site-web',
    'view' => 'pourquoi-site-web',
    'title' => 'Pourquoi un site web ?',
    'controller' => 'pourquoi-site-web'
  ],
  'valeur-site-web' => [
    'path' => 'valeur-site-web',
    'view' => 'valeur-site-web',
    'title' => "Quelle est la valeur d'un site web ?",
    'controller' => 'valeur-site-web'
  ]
];