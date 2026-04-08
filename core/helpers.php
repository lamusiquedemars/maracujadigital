<?php
// ======================
// ESCAPE HTML
// ======================
function e($value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

// ======================
// URL HELPERS
// ======================
// retourne l'URL absolue du site
function url(string $path = ''): string
{
    global $BASE_URL;

    return rtrim($BASE_URL, '/') . '/' . ltrim($path, '/');
}

// ======================
// ASSETS HELPERS
// ======================
function asset(string $path): string
{
    return 'assets/' . ltrim($path, '/');
}

function img(string $path): string
{
    return asset('img/' . $path);
}

// ======================
// DEBUG (dev only)
// ======================
function dd($data): void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit;
}

// ======================
// SAFE OUTPUT (optionnel)
// ======================
function esc_attr($value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

// ======================
// ENV CHECK
// ======================
function is_dev(): bool
{
    global $SITE;
    return ($SITE['env'] ?? null) === 'dev';
}
// ======================
// RENDER POUR LES BLOCS
// ======================

function render($block, $data = [])
{
    extract($data);

    require ROOT . '/app/components/' . $block . '.php';
}