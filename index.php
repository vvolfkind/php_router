<?php

require 'loader.php';
// var_dump($_SERVER);
// exit;

require Router::load('routes.php')->direct(Request::uri());