<?php
declare(strict_types=1);

$public = realpath('/home/cp2802197p33/apps/unviolondanslame/current/public');

if ($public === false) {
    http_response_code(503);
    exit('Release unavailable.');
}

$path = ltrim(rawurldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/'), '/');

if ($path !== '' && !str_contains($path, "\0")) {
    $file = realpath($public.'/'.$path);

    if ($file !== false && str_starts_with($file, $public.DIRECTORY_SEPARATOR) && is_file($file) && pathinfo($file, PATHINFO_EXTENSION) !== 'php') {
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $mimeTypes = [
            'css' => 'text/css; charset=utf-8',
            'js' => 'application/javascript; charset=utf-8',
            'mjs' => 'application/javascript; charset=utf-8',
            'json' => 'application/json',
            'webmanifest' => 'application/manifest+json',
            'svg' => 'image/svg+xml',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'webp' => 'image/webp',
            'avif' => 'image/avif',
            'png' => 'image/png',
            'jpg', 'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
        ];

        header('Content-Type: '.($mimeTypes[$extension] ?? mime_content_type($file) ?: 'application/octet-stream'));
        readfile($file);
        exit;
    }
}

require $public.'/index.php';
