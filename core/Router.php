<?php

class Router{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file){
        $router = new static;
        require $file;
        return $router;
    }


    public  function get($uri, $controller)
    {
      
        $this->routes['GET'][$uri] = $controller;
    }
    /**
     * Register a POST route.
     *
     * @param string $uri
     * @param string $controller
     */
    public  function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public  function direct($uri, $requestType){
        if (array_key_exists($uri, $this->routes[$requestType])) {
          
            $class = explode('@', $this->routes[$requestType][$uri]);
            return $this->callAction($class[0],$class[1]);
           
        }
        throw new Exception('No route defined for this URI.');
    }


    /**
     * Load and call the relevant controller action.
     *
     * @param string $controller
     * @param string $action
     */
    protected function callAction($controller, $action)
    {
        $controllerInstance = new $controller;
        if (! method_exists($controllerInstance, $action)) {
           $name =  get_class($controllerInstance);
            throw new Exception(
                " {$name} does not respond to the {$action} action."
            );
        }
        return $controllerInstance->$action();
    }
}
?>