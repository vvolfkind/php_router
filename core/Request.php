<?php

class Request
{
    
    public static function uri()
    {   
        $dir = dirname($_SERVER['PHP_SELF']) . "/";
        return str_replace($dir, '' ,$_SERVER['REQUEST_URI']);
    }
}