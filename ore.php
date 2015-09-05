
<?php
class ore
{
	public $name = 'iron';
	public $raw = true;
	public $goods = 'raw iron ore';
	public $total_goods = 2;
	public $break_point = 8;
	public $harness = 7;
	public $sharpness = 10;
	//get mat score
	public $mat_score = 8;
	public $ore_ability = 'N/A';
}

$testdump = new ore;
var_dump($testdump);

?>