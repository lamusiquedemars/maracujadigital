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
    'title' => 'Solutions numériques sur mesure',
    'description' => 'Solutions numériques modulaires et personnalisées pour présenter votre activité, développer votre clientèle et simplifier votre gestion.',
    'controller' => 'site-web'
  ],
  'pilotage' => [
    'path' => 'pilotage',
    'view' => 'pilotage',
    'title' => 'Accompagnement de projets numériques | Maracuja Digital',
    'description' => 'Clarifier, structurer ou suivre un projet web ou numérique avec un accompagnement adapté à son avancement.',
    'controller' => 'pilotage'
  ],
  'methode' => [
    'path' => 'methode',
    'view' => 'methode',
    'title' => 'Méthode de conception numérique | Maracuja Digital',
    'description' => 'Une méthode de conception numérique sur mesure, de la compréhension de votre métier à la mise en service et à l’accompagnement.',
    'controller' => 'methode'
  ],  
  'offre-site-web' => [
    'path' => 'offre-site-web',
    'view' => 'offre-site-web',
    'title' => 'Prestations & tarifs',
    'description' => 'Découvrez les prestations Maracuja Digital : site professionnel, fonctionnalités complémentaires, accompagnement et repères de prix.',
    'controller' => 'offre-site-web'
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
    'title' => 'Contact | Maracuja Digital',
    'description' => 'Parlez-nous de votre projet : site professionnel, développement de clientèle ou solution numérique adaptée à votre activité.',
    'controller' => 'contact',
    'styles' => ['contact.css']
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
  ],
  'site-web-quelles-options' => [
    'path' => 'site-web-quelles-options',
    'view' => 'site-web-quelles-options',
    'title' => "Site web : quelles options ?",
    'controller' => 'site-web-quelles-options'
  ]
];
