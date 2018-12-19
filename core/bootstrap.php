<?php

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));

function view($view, $data = [])
{
	extract($data);	

	require "app/views/{$view}.view.php";
}
function redirect($url)
{
	header("Location: {$url}");
}