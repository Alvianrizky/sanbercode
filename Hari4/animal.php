<?php 

class Animal
{
	public $cold_blooded = 'false';
	public $legs = 2;
	public $name;

	public function __construct($name) 
	{
		$this->name= $name;
	}
}

?>