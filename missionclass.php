
<?php

class mission
{
	public $mission_time = 12;
	//public $mission_troops = array();
	public $mission_type = 'scouting';
	public $start_date = 1;
	public $end_date = 0;
	public $cargo = 'info';
	public $food_cost = 10;
	public $total_troops =1;
	public $reward = array();
	public $XP_earned = 12;
	
	public function setmission($time,$date,$troops,$type,$item)
	{
		$this->mission_time = $time;
		$this->start_date = $date;
		$this->enddate($time,$date);
		$this->food_cost = $troops*10;
		$this->mission_type = $type;
		$this->cargo = $item;
		$this->XP_earned=$time*1;
	}
	public function enddate($mision_time1,$stat_date1) //gets end date
	{
		$this->end_date = $stat_date1+$mision_time1;
		return $this->end_date;
	}
	public function setreward()
	{
		
	}

}

$test = new mission; 
$test->setmission(15,1,5,'guard','none');
$test->setreward();
echo $test->end_date;
echo $test->start_date;
echo $test->mission_time;
echo $test->food_cost;
echo $test->mission_type;
echo $test->cargo;
?>