
<?php

class mission
{
	public $mission_time = 12;
	public $mission_troops = array();
	public $mission_type = 'scouting';
	public $start_date = array();
	public $end_date = array();
	public $cargo = 'info';
	public $food_cost = 10;
	public $total_troops =1;
	public $reward = array();
	public $XP_earned = 12;
}

$testdump = new mission;
var_dump($testdump);

?>