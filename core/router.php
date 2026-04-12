<?php
/*
  Fichier de routage principal de l'application
  La fonction resolveRoute() prend une URI et la liste des routes, et retourne les informations de la route correspondante (vue, titre, données, status)
  Si aucune route ne correspond, elle retourne une route 404 par défaut
*/
function resolveRoute(string $uri, array $routes): array
{
    $uri = trim($uri, '/');
    foreach ($routes as $route) {
        if ($route['path'] === $uri) {
            // controller
            $data = [];

            if (!empty($route['controller'])) {
                $controllerFile = ROOT . '/app/controllers/' . $route['controller'] . '.php';

                if (file_exists($controllerFile)) {
                    $data = require $controllerFile;
                }
            }
            $file = ROOT . '/app/pages/' . $route['view'] . '.php';
            if (!file_exists($file)) {
                break;
            }
            return [
                'view' => $file,
                'title' => $route['title'] ?? ucwords(str_replace('-', ' ', $route['view'])),
                'data' => $data ?? [],
                'status' => 200
            ];
        }
    }

    return [
        'view' => ROOT . '/app/pages/404.php',
        'title' => '404',
        'data' => [],
        'status' => 404
    ];
}