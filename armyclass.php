
<?php

class army
{
	public $name = '1st guard';
	public $total_stands = 1;
	public $total_solo = 0;
	public $troops = array();
	public $solo = array();
	//get troops
	public $hex_row = 1;
	public $hex_column = 1;
	public $total_combat_mod = 0;
	
}

$testdump = new army;
var_dump($testdump);

?>