<?php

class Person
{
	public $name;
	public $age;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function setAge($age){
		if($age < 18){
			throw new Exception("Person not old enough");
		}
		$this->age = $age;
	}

	public function getAge()
	{
		return $this->age * 365;
	}
}



$john = new Person("John Doe");

$john->setAge(20);

var_dump($john->getAge());