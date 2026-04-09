<?php
// ROOT global (toujours base projet)
define('ROOT', dirname(__DIR__));

$ROUTES = require ROOT . '/config/routes.php';
// CONFIG
// ======================
require_once ROOT . '/config/site.php';

$ROUTES = require ROOT . '/app/config/routes.php';

// ======================
// CORE
// ======================
require_once ROOT . '/core/helpers.php';

// ======================
// GLOBALS SAFE INIT
// ======================

$BASE_URL = $SITE['url'];
$SEO = $SITE['seo'];
$ASSETS = $SITE['assets'];

// ======================
// ENV MODE
// ======================
if ($SITE['env'] === 'dev') {
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
} else {
  error_reporting(0);
  ini_set('display_errors', 0);
}