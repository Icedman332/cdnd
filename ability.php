<?php
class ability
{
	public $type = array();
	public $bonus = array();
	public $advantage = False;
	public $disadvantage = False;
	public $description = 'text here';
	public $save_attack = array();
	public $attack = 0;	
}

$testdump = new ability;
var_dump($testdump);
?>