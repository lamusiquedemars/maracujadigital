<?php
/*
 * Point d'entrée de l'application
 * - Charge le bootstrap (config, routes, helpers)
 * - Résout la route courante
 * - Affiche la vue correspondante
 */
require_once dirname(__DIR__) . '/core/bootstrap.php';
require_once ROOT . '/core/router.php';

/*
  Résolution de la route courante
  - On nettoie l'URI pour enlever le base path et "index.php" si présent
  - On utilise la fonction resolveRoute() pour trouver la route correspondante dans $ROUTES
  - Si aucune route ne correspond, on retourne une route 404 par défaut
*/
$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($base !== '' && strpos($uri, $base) === 0) {
    $uri = substr($uri, strlen($base));
}
$uri = trim($uri, '/');
if (str_starts_with($uri, 'index.php')) {
    $uri = trim(substr($uri, strlen('index.php')), '/');
}
/* Initialisation des slots pour les métadonnées, CSS, JS, etc.
   - Ces slots peuvent être remplis par les vues ou les composants pour injecter du contenu dans le <head> ou avant la fermeture du <body>
   - Par exemple, une vue peut appeler slot_add('meta', '<meta name="description" content="...">') pour ajouter une meta description spécifique à cette page
*/
$slots = [
    'meta' => [],
    'css' => [],
    'js' => [],
    'head' => []
];

$route = resolveRoute($uri, $ROUTES);
$view = $route['view'];
$title = $route['title'];
$data  = $route['data'] ?? [];
if ($route['status'] === 404) {
    http_response_code(404);
}

/* Affichage de la vue
   - Inclut app/layout/layout.php qui affiche le header, footer, etc.
   - La variable $view est utilisée pour inclure la vue spécifique à la route
*/
require ROOT . '/app/layout/layout.php';