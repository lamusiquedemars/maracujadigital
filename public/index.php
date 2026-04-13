<?php

require_once dirname(__DIR__) . '/core/bootstrap.php';
require_once ROOT . '/core/router.php';

/*
  Résolution de la route courante
*/
$rawUri = $_SERVER['REQUEST_URI'] ?? '/';
$uri = parse_url($rawUri, PHP_URL_PATH) ?? '/';
$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
if ($base !== '' && str_starts_with($uri, $base)) {
    $uri = substr($uri, strlen($base));
}
$uri = trim($uri, '/');
if (str_starts_with($uri, 'index.php')) {
    $uri = trim(substr($uri, strlen('index.php')), '/');
}

/*
  Slots globaux
*/
$slots = [
    'meta' => [],
    'css' => [],
    'js' => [],
    'head' => []
];

$route = resolveRoute($uri, $ROUTES);

$view = $route['view'];
$title = $route['title'];
$data  = $route['data'] ?? [];

if (($route['status'] ?? null) === 404) {
    http_response_code(404);
}

require ROOT . '/app/layout/layout.php';