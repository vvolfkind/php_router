<?php

// definir las rutas en el router con el metodo define()
$router->define([
    /*
    *
    * definir rutas apuntando a su respectivo controlador
    */
    '' => 'controllers/IndexController.php',
    'about' => 'controllers/AboutController.php'

]);