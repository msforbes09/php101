<?php

return [
	'database' => [
		'connection' => 'your host',
		'name' => 'database name',
		'username' => 'username',
		'password' => 'password',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];