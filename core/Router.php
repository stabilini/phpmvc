<?php

namespace app\core;
class Router
{
    public Request $request;
    protected array $routes = [];

   
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        
    }
}