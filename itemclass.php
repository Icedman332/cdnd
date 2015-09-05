<?php

class items
{
	public $name = 'sword';
	public $body_slot = 'hand';
	public $item_type = 'weapon';
	public $mat_type = 'iron';
	public $mat_score = 10;
	public $AC_bonus = 4;
	public $damage_bonus = 3;
	public $attack_bonus = 3;
	public $item_ability = array();
	public $other_damage = 'fire';
}

$testdump = new items;
var_dump($testdump);

?>