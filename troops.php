
<?php

class troops
{
	public $type = 'lesser';
	public $total_XP = 0;
	public $XP_to_next_level = 5;
	//get stats 
	//mission on 
	public $level = 1;
	public $class_type = 'scout';
	//items
	public $troop_race = 'human';
	public $mounted = false;
	public $mount_type = 'horse';
	public $poison_weapon = false;
	public $active = true;
	public $stand_solo = true; //tue is stand
	public $rank_title = 'solder';
	public $leadership_score = 1;
	public $combat_mod = 0;
	public $great = false;
	public $legend =false;
	public $buy_DC = 25;	
}

$testdump = new troops;
var_dump($testdump);

?>