<?php

require 'loader.php';

//var_dump($_SERVER['REQUEST_URI']); exit;
require Router::load('routes.php')->direct(Request::uri());