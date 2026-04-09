<?php

require_once dirname(__DIR__) . '/core/bootstrap.php';

/**
 * BASE
 */
$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

/**
 * URI brute
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

/**
 * enlève la base (/maracujadigital/public)
 */
if ($base !== '' && strpos($uri, $base) === 0) {
    $uri = substr($uri, strlen($base));
}

/**
 * normalisation
 */
$uri = trim($uri, '/');

/**
 * debug (optionnel)
 */
echo '<pre>';
var_dump([
    'REQUEST_URI' => $_SERVER['REQUEST_URI'],
    'SCRIPT_NAME' => $_SERVER['SCRIPT_NAME'],
    'base' => $base,
    'uri' => $uri,
]);
echo '</pre>';

/**
 * ROUTING HOME
 */
if ($uri === '' || $uri === 'index.php') {
    $view = dirname(__DIR__) . '/app/pages/home.php';
    $title = 'Accueil';
} else {

    $file = dirname(__DIR__) . '/app/pages/' . $uri . '.php';

    if (file_exists($file)) {
        $view = $file;
        $title = ucwords(str_replace(['/', '-'], [' › ', ' '], $uri));
    } else {
        http_response_code(404);
        $view = dirname(__DIR__) . '/app/pages/404.php';
        $title = '404';
    }
}

/**
 * LAYOUT
 */
require dirname(__DIR__) . '/app/layout/layout.php';