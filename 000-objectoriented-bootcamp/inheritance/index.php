<?php

class Mother 
{
	public function getEyeCount()
	{
		return 2;
	}
}




class Child extends Mother 
{

}

$o = (new Child)->getEyeCount();
var_dump($o);
