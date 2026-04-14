<?php
// ======================
// ROOT
// ======================
define('ROOT', dirname(__DIR__));

// ======================
// ENV DETECTION
// ======================
$APP_ENV = $_SERVER['APP_ENV'] ?? 'dev';
/*
  On choisit le fichier .env à charger en fonction de l'environnement :
  - En production, on charge le fichier .env (qui doit être présent et configuré)
  - En développement, on charge le fichier .env.dev (qui contient des valeurs par défaut adaptées au dev)
*/
$envFile = ROOT . ($APP_ENV === 'prod'
    ? '/.env'
    : '/.env.dev'
);

// ======================
// ENV LOADER
// ======================
function loadEnv(string $path): void
{
    if (!file_exists($path)) return;

    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);

        if ($line === '' || $line[0] === '#') continue;
        if (!str_contains($line, '=')) continue;

        [$key, $value] = explode('=', $line, 2);

        $_ENV[trim($key)] = trim($value);
    }
}

loadEnv($envFile);

// ======================
// ENV VARS
// ======================
$APP_ENV  = $_ENV['APP_ENV'] ?? $APP_ENV;
$APP_URL  = $_ENV['APP_URL'] ?? '';
$APP_BASE = $_ENV['APP_BASE'] ?? '';
var_dump($APP_ENV);
// ======================
// ROUTES
// ======================
$ROUTES = require ROOT . '/config/routes.php';

// ======================
// CONFIG
// ======================
require_once ROOT . '/config/site.php';

// ======================
// CORE
// ======================
require_once ROOT . '/core/helpers.php';

// ======================
// DERIVED GLOBALS
// ======================
$BASE_URL = rtrim($APP_URL, '/');
$SEO = $SITE['seo'] ?? [];
$ASSETS = $SITE['assets'] ?? [];

// inject ENV into SITE (final state)
$SITE['env'] = $APP_ENV;
$SITE['url'] = $BASE_URL;

// ======================
// CONSTANTS FOR HELPERS
// ======================
define('BASE_URL', $BASE_URL);
define('APP_ENV', $APP_ENV);

// ======================
// DEBUG MODE
// ======================
$isDev = ($APP_ENV === 'dev');

error_reporting($isDev ? E_ALL : 0);
ini_set('display_errors', $isDev ? 1 : 0);