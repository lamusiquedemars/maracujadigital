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
  'realisations' => [
    'path' => 'realisations',
    'view' => 'realisations',
    'title' => 'Réalisations',
    'controller' => 'realisations'
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
  'mentions_legales' => [
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
];