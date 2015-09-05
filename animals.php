
<?php
class animals
{
	public $name = 'horse';
	public $raw = true;
	public $goods = array();
	public $total_goods = array();
	public $mount = true;
	public $troop = false;
	public $beasts_items = array();
	//get beast class stats
	public $mat_score = 1;
	public $animals_ability = 'N/A';
}

$testdump = new animals;
var_dump($testdump);

?>