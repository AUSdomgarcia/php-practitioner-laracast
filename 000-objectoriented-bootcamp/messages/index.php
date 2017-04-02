<?php

class Person {
	protected $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
}

class Staff {
	protected $members = [];
	public function __construct($members = [])
	{
		$this->members = $members;
	}
	public function add(Person $person)
	{
		$this->members[] = $person;
	}
	public function members()
	{
		return $this->members;
	}
}

class Business {
	protected $staff;
	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}
	
	public function hire(Person $person)
	{
		$this->staff->add($person);
	}
	public function getStaffMembers()
	{
		return $this->staff->members();
	}
}

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$staff->add(new Person("Cristina Joy"));

$laracast = new Business($staff);

$laracast->hire(new Person("Jane Doe"));

var_dump($laracast->getStaffMembers());