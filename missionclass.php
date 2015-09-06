
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
	public $Rtype = array('gold','item','people','tec','ore type','plant','animal','dragon');
	public $reward = array(0,'none',0,'none','none','none','none','none');
	public $XP_earned = 12;
	
	
	public function setmission($time,$date,$troops,$type,$item)
	{
		$this->mission_time = $time;
		$this->start_date = $date;
		$this->enddate($time,$date);
		$this->mission_type = $type;
		$this->cargo = $item;
		if($type=='guard')
		{
			$this->food_cost = $troops*0;
			$this->XP_earned=$time*.2;
			$this->setreward(0,'no',0,'n/a','n/a','n/a','n/a','n/a');
			echo $this->XP_earned;
		}
		else 
		{
			$this->food_cost = $troops*10;
			$this->XP_earned=$time*1;
			$this->setreward(0,'iron sword',500,'n/a','n/a','n/a','n/a','adult red');
			echo $this->XP_earned;
		}
	}
	public function enddate($mision_time1,$stat_date1) //gets end date
	{
		$this->end_date = $stat_date1+$mision_time1;
		return $this->end_date;
	}
	public function setreward($gold,$item,$people,$tec,$good,$plant,$animal,$dragon) 
	{
		$this->reward[0] = $gold;
		$this->reward[1] = $item;
		$this->reward[2] = $people;
		$this->reward[3] = $tec;
		$this->reward[4] = $good;
		$this->reward[5] = $plant;
		$this->reward[6] = $animal;
		$this->reward[7] = $dragon;
		
		for($roll=0;$roll<=7;$roll++)
		{
			echo $this->reward [$roll]. " " . $this->Rtype[$roll]. "<br>";
			$this->roll=$roll+1;
		}
	}

}


$test = new mission; 
$test->setmission(15,1,5,'spying','none');
//$test->setreward(15,'iron sword',0,'n/a','n/a','n/a','n/a');


?>