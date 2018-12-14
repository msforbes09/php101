<?php

return [
	'database' => [
		'connection' => 'mysql:host=127.0.0.1',
		'name' => 'php101',
		'username' => 'root',
		'password' => 'support',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];