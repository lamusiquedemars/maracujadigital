<?php
declare(strict_types=1);

$root = realpath('/home/cp2802197p33/apps/atelierivoincidit/public');

if ($root === false) {
    http_response_code(503);
    exit;
}

$path = ltrim(rawurldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/'), '/');

if ($path !== '' && !str_contains($path, "\0") && !preg_match('~(^|/)\.~', $path) && !preg_match('~\.php(?:$|/)~i', $path)) {
    $file = realpath($root.'/'.$path);

    if ($file !== false && str_starts_with($file, $root.DIRECTORY_SEPARATOR) && is_file($file)) {
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $types = ['css' => 'text/css; charset=utf-8', 'js' => 'application/javascript; charset=utf-8', 'svg' => 'image/svg+xml', 'woff2' => 'font/woff2', 'woff' => 'font/woff'];

        header('Content-Type: '.($types[$extension] ?? mime_content_type($file) ?: 'application/octet-stream'));
        header('Content-Length: '.filesize($file));
        readfile($file);
        exit;
    }
}

$appRoot = dirname($root);

if (file_exists($maintenance = $appRoot.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

require $appRoot.'/vendor/autoload.php';
$app = require $appRoot.'/bootstrap/app.php';
$app->handleRequest(\Illuminate\Http\Request::capture());
