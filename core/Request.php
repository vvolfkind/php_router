<?php

class Request
{
    
    public static function uri()
    {   
        //var_dump(str_replace("/DigitalHouseWork/PHP_Alternativos/Router_V2/", '' ,$_SERVER['REQUEST_URI'])); exit;
        return str_replace("/DigitalHouseWork/PHP_Alternativos/Router_V2/", '' ,$_SERVER['REQUEST_URI']);
    }
}