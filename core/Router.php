<?php

class Router
{
	protected $routes = [
		'GET' => [], 
		'POST' => [], 
	];

	public static function load($file)
	{
		$router = new static;

		require $file;

		return $router;
	}

	public function get($uri, $controller)
	{
		$this->routes["GET"][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes["POST"][$uri] = $controller;
	}

	public function direct($uri, $method)
	{	
		// die(var_dump($method)); 
		if(array_key_exists($uri, $this->routes[$method]))
		{	
			$controllerName = explode('@', $this->routes[$method][$uri])[0];
			$method = explode('@', $this->routes[$method][$uri])[1];

			$controller = new $controllerName;

			if(! method_exists($controller, $method)){
				throw new Exception("{$method} not found in {$controllerName}.");
			}

			return $controller->$method();
		}

		throw new Exception("Request Page Not Found");
	}
}