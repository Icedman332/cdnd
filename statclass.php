
<?php

class stats 
{
	public $str = 10;
	public $dex = 10;
	public $con = 10;
	public $inte = 10;
	public $wis = 10;
	public $cha = 10;
	public $training_time = 8;
	public $training_cost = 80;
	public $monthy_cost = 10;
	public $prime_stat = 'str';
	public $secon_stat = 'dex';
	public $third_stat = 'con';
	public $level_CR = 1;
	public $proficiency_bonus = 2;
	public $proficent_with = array();
	public $class_ability = array();
	Public $spell_ability = array();
	public $total_stats = array();
	public $training = array();
	
	Public function gettrainginfo()
	{
		
		$this->$traing[0] = $this->training_time;
		$this->$traing[1] = $this->training_cost;
		return $traing;
	}
	
	public function setproficency($canuse)
	//to stats, weapon in hand t/f, perception,persuasion,survial
	{
		$this->proficent_with[0] = $canuse[0];
		$this->proficent_with[1] = $canuse[1];
		$this->proficent_with[2] = $canuse[2];
		$this->proficent_with[3] = $canuse[3];
		$this->proficent_with[4] = $canuse[4];
		$this->proficent_with[5] = $canuse[5];
	}
	public function getproficency()
	{
		return $this->proficent_with;
	}
	public function setstats($statblock,$racestats)
	//6 stats traing time and cost, 3 main stats level, races stats array
	{
		$this->str = $statblock[0]+$racestats[0];
		$this->dex = $statblock[1]+$racestats[1];
		$this->con = $statblock[2]+$racestats[2];
		$this->inte = $statblock[3]+$racestats[3];
		$this->wis = $statblock[4]+$racestats[4];
		$this->cha = $statblock[5]+$racestats[5];
		$this->training_time = $statblock[6];
		$this->training_cost = $statblock[7];
		$this->prime_stat = $statblock[8];
		$this->secon_stat = $statblock[9];
		$this->third_stat = $statblock[10];
		$this->level_CR = $statblock[11];
		$this->proficiency_bonus = round($this->level_CR/4+1.3);
	}
	
	public function getstats()
	{
		$this->total_stats[0] = $this->str;
		$this->total_stats[1] = $this->dex;
		$this->total_stats[2] = $this->con;
		$this->total_stats[3] = $this->inte;
		$this->total_stats[4] = $this->wis;
		$this->total_stats[5] = $this->cha;
		return $this->total_stats;
	}
}


$monkey = array(15,14,13,12,11,10,2,20,'dex','con','str',12,'human');
$racestat = array(1,1,1,1,1,1);
$ratman = array('dex','cha',true,true,true,false);
$test = new stats;
$test->setstats($monkey,$racestat);
$test->setproficency($ratman);

?>