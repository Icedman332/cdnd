<?php
class race
{
	public $str_bonus = 0;
	public $dex_bonus = 0;
	public $con_bonus = 0;
	public $int_bonus = 0;
	public $wis_bonus = 0;
	public $cha_bonus = 0;
	public $bonus = 0;
	public $subRace = 'function';
	public $savageRating = 0;
	public $growthRate = .1;
	public $deathRate = .05;
	
}


class sub_race
{
	public $str_bonus = 10;
	public $dex_bonus = 10;
	public $con_bonus = 10;
	public $int_bonus = 10;
	public $wis_bonus = 10;
	public $cha_bonus = 10;
	public $subRace_bonus = 'function';	
}
echo '<p>';
$testdump = new sub_race;
var_dump($testdump);
echo '</p><br><p>';
$testdump1 = new race;
var_dump($testdump1);
echo '</p>';
?>