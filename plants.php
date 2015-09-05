
<?php
class plants
{
	public $name = 'pine tree';
	public $raw = true;
	public $goods = 'wood';
	public $total_goods = 2;
	public $break_point = 0;
	public $harness = 2;
	public $sharpness = 1;
	//get mat score
	public $mat_score = 1;
	public $plant_ability = 'N/A';
}

$testdump = new plants;
var_dump($testdump);

?>