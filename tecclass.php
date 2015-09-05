
<?php

class tec
{
	public $name = 'sorcerer';
	public $tec_needed = 'none';
	public $tec_level = 1;
	public $tec_school = 'arcane';
	public $unlocks = array();
	public $tec_ability = array();
}

$testdump = new tec;
var_dump($testdump);

?>