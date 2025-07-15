<?php

use app\controllers\OrderController;

$routes = [
    '/' => function () {
        echo "Welcome to the SOLID mini-project!";
    },

    '/order' => function () {
        $controller = new OrderController();
        $controller->checkout();
    }
];

return $routes;
