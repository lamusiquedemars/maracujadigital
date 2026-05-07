<?php
declare(strict_types=1);

/**
 * Router commun aux sites.
 *
 * Convention des routes :
 * - la clé du tableau est le nom logique de la route : home, contact, arcus...
 * - path est l’URL publique, sans slash initial : '', 'contact', 'arcus/ars-antiqua'
 * - view est la vue dans app/pages/, sans obligation de mettre .php
 * - params contient les paramètres transmis à la page
 */

function currentPath(): string
{
    $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

    /*
     * Retire le chemin de base local si le site tourne dans un sous-dossier.
     */
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');

    if ($base !== '' && $base !== '/' && str_starts_with($uri, $base)) {
        $uri = substr($uri, strlen($base));
    }

    /*
     * Nettoie le cas /index.php/quelque-chose.
     */
    if (str_starts_with($uri, '/index.php')) {
        $uri = substr($uri, strlen('/index.php'));
    }

    return normalizePath($uri);
}

function normalizePath(string $path): string
{
    $path = '/' . trim($path, '/');

    return $path === '/' ? '/' : rtrim($path, '/');
}

function normalizeView(string $view): string
{
    $view = trim($view, '/');

    if ($view === '' || str_contains($view, '..')) {
        throw new RuntimeException('Vue invalide.');
    }

    return preg_replace('/\.php$/', '', $view);
}

function viewPath(string $view): string
{
    return ROOT . '/app/pages/' . normalizeView($view) . '.php';
}

function resolveRoute(string $path, array $routes): array
{
    $path = normalizePath($path);

    $routeFound = false;
    $routeName = null;
    $route = null;

    /*
     * Les routes sont nommées.
     * On ne cherche donc pas dans la clé du tableau,
     * mais dans le champ "path" de chaque route.
     */
    foreach ($routes as $name => $candidate) {
        $candidatePath = normalizePath($candidate['path'] ?? '');

        if ($candidatePath === $path) {
            $routeFound = true;
            $routeName = $name;
            $route = $candidate;
            break;
        }
    }

    /*
     * Route 404 par défaut.
     */
    if ($route === null) {
        $routeName = '404';
        $route = $routes['404'] ?? [
            'path' => '404',
            'view' => '404',
            'title' => 'Page introuvable',
            'description' => '',
            'bodyClass' => 'page-404',
        ];
    }

    $view = normalizeView($route['view'] ?? '404');
    $pathToView = viewPath($view);

    if (!file_exists($pathToView)) {
        throw new RuntimeException("Vue introuvable : {$pathToView}");
    }

    /*
     * On conserve toute la route originale,
     * puis on ajoute les valeurs calculées par le router.
     */
    return array_merge($route, [
        'routeName' => $routeName,
        'view' => $view,
        'viewPath' => $pathToView,
        'title' => $route['title'] ?? '',
        'description' => $route['description'] ?? '',
        'bodyClass' => $route['bodyClass'] ?? '',
        'params' => $route['params'] ?? [],
        'status' => $routeFound ? ($route['status'] ?? 200) : 404,
    ]);
}