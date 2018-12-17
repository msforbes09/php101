<?php
// die(var_dump($_SERVER));	
require 'core/bootstrap.php';

require Router::load('routes.php')
	->direct(Request::uri(), Request::method());
