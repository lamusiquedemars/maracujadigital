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
// RENDER POUR LES COMPONENTS
// ======================

function render(string $block, array $data = []): void
{
    $file = ROOT . '/app/components/' . basename($block) . '.php';

    if (!file_exists($file)) {
        throw new Exception("Component not found: " . $block);
    }

    extract($data, EXTR_SKIP);

    require $file;
}