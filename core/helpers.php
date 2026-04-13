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
 /* Charge un fichier de composant PHP et lui passe des données ($props).
 * Objectif : composants simples + réutilisables.
 */
function render(string $block, array $props = []): void
{
    // Chemin du composant
    $file = ROOT . '/app/components/' . basename($block) . '.php';
    // Sécurité : vérifie que le fichier existe
    if (!file_exists($file)) {
        throw new Exception("Component not found: " . $block);
    }
    /**
     * NORMALISATION GÉNÉRIQUE DES PROPS
     * But : éviter les formats multiples côté composants.
     * Exemple traité ici :
     * - class peut être string OU array
     * - si array => transformé en string CSS
     * On garde le reste intact (items, etc.).
     */
    foreach ($props as $key => $value) {
        // Cas spécifique mais générique : listes simples
        // ex: ['hero--page', 'hero--center']
        if ($key === 'class' && is_array($value)) {
            $props[$key] = implode(' ', $value);
        }
    }
    // Injection des props dans le scope du composant
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