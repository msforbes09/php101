<?php

require 'function.php';

require 'database/Connection.php';

require 'Task.php';

$tasks = fetchAllTasks(Connection::make());

require 'index.view.php';
 
