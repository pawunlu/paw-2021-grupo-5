<?php 

namespace Paw\Core;

class Router {

    public array $routes;

    public function loadRoutes($path, $action){

        $this->routes[$path] = $action;

    }

    public function direct($path){

        list($controller, $method) = explode('@', $this->routes[$path]);

        $objName = "Paw\\App\\Controllers\\{$controller}";
        $objController = new $objName;

        $objController->$method();

    }
}