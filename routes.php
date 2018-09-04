<?php

// definir las rutas en el router con el metodo define()
$router->define([
    '' => 'controllers/IndexController.php',
    'about' => 'controllers/AboutController.php'
]);