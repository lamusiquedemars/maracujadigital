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

/**
 * Construit une URL absolue propre
 * - évite les double slash
 * - fonctionne en sous-dossier
 */
function url(string $path = ''): string
{
    global $BASE_URL;

    return $BASE_URL . ($path ? '/' . ltrim($path, '/') : '');
}


// ======================
// ASSETS HELPERS
// ======================

/**
 * Génère une URL d'asset (CSS, JS, images…)
 * ex: /public/assets/...
 */
function asset(string $path): string
{
    return url('public/assets/' . ltrim($path, '/'));
}

/**
 * Raccourci pour les images
 */
function img(string $path): string
{
    return asset('img/' . ltrim($path, '/'));
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
// SAFE OUTPUT
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
// RENDER COMPONENT
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


// ======================
// ROUTING HELPER
// ======================

/**
 * Génère une URL à partir d'une route nommée
 */
function route(string $name): string
{
    global $ROUTES;

    if (!isset($ROUTES[$name])) {
        return '#';
    }

    return url($ROUTES[$name]);
}