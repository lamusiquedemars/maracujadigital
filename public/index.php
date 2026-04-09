<?php
echo "<pre>";
var_dump([
  'REQUEST_URI' => $_SERVER['REQUEST_URI'] ?? null,
  'SCRIPT_NAME' => $_SERVER['SCRIPT_NAME'] ?? null,
  'PHP_SELF' => $_SERVER['PHP_SELF'] ?? null,
  'base' => $base ?? null,
  'uri_initial' => $uri ?? null,
]);
echo "</pre>";
exit;
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
 * enlève index.php proprement
 */
if (str_starts_with($uri, 'index.php')) {
    $uri = substr($uri, strlen('index.php'));
}

$uri = trim($uri, '/');

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