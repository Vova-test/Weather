<?php

class Router
{
    private $routes = [];

    public function setRoute($routes = [])
    {
        if (!is_array($routes) || empty($routes)) {
            header("HTTP/1.0 404 Not Found");
        }

        $this->routes = $routes;
    }

    public function run($query)
    {

        if (empty($query)
            || !isset($this->routes[$query])
            || !isset($this->routes[$query]["controller"])
            || !isset($this->routes[$query]["action"])
            || empty($this->routes[$query]["controller"])
            || empty($this->routes[$query]["action"])
        ) {
            header("HTTP/1.0 404 Not Found");
            return;
        }

        $controllerName = 'App\\Controllers\\' . $this->routes[$query]["controller"];
        $controllerObj = new $controllerName();
        $controllerObj->{$this->routes[$query]["action"]}($_REQUEST);
    }
}