<?php

class Router
{

    private $routes = [];

    private function __construct()
    {
        
    }

    public static function add($route, $controller, $metthod)
    {

        static::$routes[$route] = ["controller" => $controller, "method" => $metthod];

    }

    public static function getAction($route)
    {
        
        if(array_key_exists($route, static::$routes))
        {
            return static::$routes[$route];
        }else
        {
            throw new Exception("La ruta $route no existe");
        }

    }


}