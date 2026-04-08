<?php

require_once dirname(__DIR__) . '/core/bootstrap.php';

$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// enlève le base path
$uri = substr($uri, strlen($base));

// nettoie
$uri = trim($uri, '/');

// HOME
if ($uri === 'public') {
    $uri = '';
}
if ($uri === '') {
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

require dirname(__DIR__) . '/app/layout/layout.php';