
<?php

class vehicle
{
	public $name = 'the satai';
	public $vehicle_type = 'air';
	public $vehicle_uses = array();
	public $cargo = 'slaves';
	public $vehicle_weapon = array();
	public $crew = 50;
	public $caption = 'cap jack';
	//get cap
	public $production_cost = 1000;
	public $upkeep = 10;
	public $HP = 500;
	public $AC = 5;
	public $hardness = 5;
	public $attack_damage = 10;
	//get attack damage
	public $HP_lost = 0;
}

$testdump = new vehicle;
var_dump($testdump);

?>