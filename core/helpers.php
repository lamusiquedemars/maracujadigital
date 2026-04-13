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
function url($path = ''): string
{
    if (is_array($path)) {
        return '';
    }

    $base = rtrim(BASE_URL, '/');
    $path = trim((string)$path, '/');

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
/* Permet de rendre un composant réutilisable avec des propriétés
   ex: render('btn', ['label' => 'Contactez-moi', 'route' => 'contact']) rend un bouton avec le label "Contactez-moi" qui pointe vers la route "contact"
*/
function render(string $block, array $props = []): void
{
    $file = ROOT . '/app/components/' . basename($block) . '.php';

    if (!file_exists($file)) {
        throw new Exception("Component not found: " . $block);
    }

    require $file;
}

// ======================
// SLOTS
// ======================
/*
    * Permet d'ajouter du contenu à un "slot" qui peut être affiché dans le layout
    * ex: slot_add('meta', '<meta name="description" content="...">') ajoute une meta description qui peut être affichée dans le <head> du layout
*/
function slot_add(string $type, string $value): void
{
    global $slots;
    $slots[$type][] = $value;
}

// ======================
// ROUTING HELPER
// ======================
/* Génère une URL à partir du nom d'une route définie dans config/routes.php
   ex: route('contact') => https://mon-site.com/contact
*/
function route(string $name): string
{
    global $ROUTES;

    if (!isset($ROUTES[$name])) {
        return '#';
    }

    return url($ROUTES[$name]['path'] ?? '');
}