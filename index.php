<?php


require 'loader.php';



require Router::load('routes.php')->direct(Request::uri());