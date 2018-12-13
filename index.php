<?php

require('function.php');

/**
 * 
 */
class Tasks
{

	public $description;
	
	public $completed = false;
	
	public function __construct($description)
	{
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}

	public function isComplete()
	{
		return $this->completed;
	}

}

$tasks = [
	new Tasks('review classes 101'),
	new Tasks('review laracasts'),
	new Tasks('mysql'),
	new Tasks('upload to github'),
	new Tasks('meeting with structural'),
];

$tasks[2]->complete();
$tasks[3]->complete();


// dd($tasks);

require 'index.view.php';