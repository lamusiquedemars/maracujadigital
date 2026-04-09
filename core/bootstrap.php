<?php
// ROOT global (toujours base projet)
define('ROOT', dirname(__DIR__));

$ROUTES = require ROOT . '/config/routes.php';

// ======================
// CONFIG
// ======================
require_once ROOT . '/config/site.php';

/**
 * BASE ACTIVE (auto adaptée au dossier où tourne le site)
 */
//$SITE['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

// ======================
// CORE
// ======================
require_once ROOT . '/core/helpers.php';

// ======================
// GLOBALS SAFE INIT
// ======================


$SEO = $SITE['seo'];
$ASSETS = $SITE['assets'];
/*url de base pour les liens internes (ex: si le site est dans un sous-dossier, elle est définie dans $SITE['base'])*/
$BASE_URL = 'https://atelierivoincidit.fr/maracujadigital/public';
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