<?php

$info = [
	'Name' => 'Arnel',
	'Age' => 27,
	'Hair' => 'Black'
];

class Tasks{
	protected $description;

	protected $completed = false;

	public function __construct($description)
	{
		$this->description = $description;
	}
	public function finishTask()
	{
		$this->completed = true;
	}

}

$newTask = [
	new Tasks('practice php'),
	new Tasks('study'),
	new Tasks('sleep'),
	new Tasks('clear data'),
];

$newTask[3]->finishTask();

var_dump($newTask);

die();

require 'index.view.php';