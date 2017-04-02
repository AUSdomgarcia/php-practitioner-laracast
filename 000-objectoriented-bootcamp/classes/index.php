<?php

class Task
{
	public $description = "Go to the Store";
	public $completed = false;

	public function __construct($description)
	{
		$this->description = $description;
	}
	public function complete()
	{
		$this->completed = true;
	}
}

$task = new Task("Learn OOP");

$task->complete();

$task2 = new Task("Learn OOP");

var_dump(
		$task->description, 
		$task->completed, 
		$task2->description
	);