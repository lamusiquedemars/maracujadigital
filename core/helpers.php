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
/*
    * Génère une URL complète à partir d'un chemin relatif
    * ex: url('contact') => https://mon-site.com/contact
    */
function url(string $path = ''): string
{
    $base = rtrim(BASE_URL, '/');
    $path = trim($path, '/');
    return $base . ($path ? '/' . $path : '');
}

// ======================
// ASSETS HELPERS
// ======================
/* Génère une URL d'asset à partir d'un chemin relatif
   ex: asset('css/style.css') => https://mon-site.com/assets/css/style.css
*/
function asset(string $path): string
{
    return url('assets/' . ltrim($path, '/'));
}
/* Génère une URL d'image à partir d'un chemin relatif
   ex: img('logo.png') => https://mon-site.com/assets/img/logo.png
*/
function img(string $path): string
{
    return asset('img/' . ltrim($path, '/'));
}

// ======================
// DEBUG
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
    return APP_ENV === 'dev';
}

// ======================
// RENDER COMPONENT
// ======================
/* Génère le code HTML d'un composant à partir de son nom et de ses données
   ex: render('card', ['title' => 'Hello']) => inclut app/components/card.php avec $title = 'Hello'
*/
function render(string $block, array $data = []): void
{
    $file = ROOT . '/app/components/' . basename($block) . '.php';
    if (!file_exists($file)) {
        throw new Exception("Component not found: " . $block);
    }
    extract($data, EXTR_SKIP | EXTR_PREFIX_SAME, 'data');
    require $file;
}

function slot_add(string $type, string $value): void
{
    global $slots;
    $slots[$type][] = $value;
}

// ======================
// ROUTING HELPER
// ======================
/* Génère une URL à partir du nom d'une route
   ex: route('contact') => https://mon-site.com/contact (si la route 'contact' est définie dans config/routes.php)
*/
function route(string $name): string
{
    global $ROUTES;
    if (!isset($ROUTES[$name])) {
        return '#';
    }
    return url($ROUTES[$name]);
}