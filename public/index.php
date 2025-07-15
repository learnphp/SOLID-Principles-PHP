<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = require __DIR__ . '/../routes/web.php';

if (isset($routes[$uri])) {
    $routes[$uri](); // Call the matched route function
} else {
    http_response_code(404);
    echo "404 - Route not found.";
}
