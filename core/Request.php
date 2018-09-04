<?php

class Request
{
    public static function uri()
    {
        return $_GET['uri'];
        return trim($_SERVER['REQUEST_URI'], "/");
    }
}