<?php
/**
 * Configuration principale du site.
 */

return [
    // Identité
    'name' => 'Maracuja Digital',
    'author' => 'Ivo Correia de Melo',

    // Environnement
    'env' => $_ENV['APP_ENV'] ?? 'prod',
    'url' => $_ENV['APP_URL'] ?? 'http://maracujadigital.local',
    'base' => $_ENV['APP_BASE'] ?? '',

    // SEO
    'description' => 'Artisan de sites web modernes.',
    'seo' => [
        'default_title' => 'Maracuja Digital',
        'default_description' => 'Artisan de sites web modernes.',
    ],

    // Assets
    'assets' => [
        'logo' => 'img/logo.png',
        'default_image' => 'img/og-default.jpg',
        'favicon_path' => 'img/',
    ],

    // Navigation
    'navigation' => [
        ['label' => 'Accueil', 'route' => 'home', 'show_mobile' => false],
        ['label' => 'Site web', 'route' => 'site-web'],
        ['label' => 'AMOA & Pilotage', 'route' => 'pilotage'],
        ['label' => 'Contact', 'route' => 'contact'],
    ],

    // Footer
    'footer' => [
        'baseline' => 'Création de sites web et pilotage de projets digitaux.',
        'links' => [
            ['label' => 'Mentions légales', 'route' => 'mentions-legales'],
            ['label' => 'CGV', 'route' => 'cgv'],
            ['label' => 'Pourquoi avoir un site web', 'route' => 'pourquoi-site-web'],
            ['label' => 'Quelle est la valeur d\'un site web ?', 'route' => 'valeur-site-web'],
            ['label' => 'Site web : quelles options ?', 'route' => 'site-web-quelles-options'],
            ['label' => 'Contact', 'route' => 'contact'],
        ],
        'socials' => [],
    ],

    // Tracking
    'tracking' => [
        'ga_id' => null,
    ],
];