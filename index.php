<?php
die(var_dump($_SERVER));
$database = require 'bootstrap.php';

$tasks = $database->selectAll('todos');

require 'index.view.php';
 
