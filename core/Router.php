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
			return $this->routes[$method][$uri];
		}

		throw new Exception("Request Page Not Found");
	}
}