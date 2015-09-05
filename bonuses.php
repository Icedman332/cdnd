<?php
class bonuses
{
	public $duration = 1;
	public $description = 'text here';
	public $bonus_given = array();
	public $tech = 'function here';
	public $got_from = 'maybe a function here';
}

$testdump = new bonuses;
var_dump($testdump);
?>