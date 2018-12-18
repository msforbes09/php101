<?php
// die(var_dump($_SERVER));	
require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('routes.php')
	->direct(Request::uri(), Request::method());
