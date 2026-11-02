<?php
declare(strict_types=1);

$target = '/home/cp2802197p33/apps/maracuja-site/current/public';
$targetRoot = realpath($target);
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$relativePath = ltrim(rawurldecode($requestPath), '/');

if ($targetRoot === false) {
    http_response_code(503);
    exit('Application unavailable');
}

if ($relativePath !== '' && !str_contains($relativePath, "\0")) {
    $candidate = realpath($targetRoot.'/'.$relativePath);

    if ($candidate !== false && str_starts_with($candidate, $targetRoot.DIRECTORY_SEPARATOR) && is_file($candidate)) {
        $extension = strtolower(pathinfo($candidate, PATHINFO_EXTENSION));
        $mimeTypes = ['css' => 'text/css; charset=utf-8', 'js' => 'application/javascript; charset=utf-8', 'json' => 'application/json; charset=utf-8', 'webmanifest' => 'application/manifest+json; charset=utf-8', 'svg' => 'image/svg+xml', 'woff' => 'font/woff', 'woff2' => 'font/woff2'];

        header('Content-Type: '.($mimeTypes[$extension] ?? mime_content_type($candidate) ?: 'application/octet-stream'));
        header('Content-Length: '.(string) filesize($candidate));
        readfile($candidate);
        exit;
    }
}

$applicationRoot = dirname($targetRoot);

if (file_exists($maintenance = $applicationRoot.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

require $applicationRoot.'/vendor/autoload.php';
$app = require $applicationRoot.'/bootstrap/app.php';
$app->handleRequest(\Illuminate\Http\Request::capture());
