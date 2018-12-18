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

	public function direct($uri, $requestType)
	{	
		// die(var_dump($requestType)); 
		if(array_key_exists($uri, $this->routes[$requestType]))
		{	
			return $this->callAction(
				...explode('@', $this->routes[$requestType][$uri])
			);
		}

		throw new Exception("Request Page Not Found");
	}
	protected function callAction($controllerName, $action)
	{
		$controller = new $controllerName;

		if(! method_exists($controller, $action)){
			throw new Exception("{$action} not found in {$controllerName}.");
		}

		return $controller->$action	();
	}
}