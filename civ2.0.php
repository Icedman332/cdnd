<?php 
	class world {
		//class methods goes here
		public $totalRow = 2;
		public $totalColumn = 1;
		public $total_pc_civ = 1;
		public $total_npc_civ = 1;
		public $totalRaiders = 1;
		public $globalYear = 1;
		public $globalMonth = 1;
		public $globalTemp = 70;
		public $wonderBuilt = array();
		public $battle = 'lets figure this out later';
	}
	
	class civ {
		//class methods goes here
		public $cities = 2;
		public $troops = 1;
		public $hexes = 1;
		public $resources = array();
		public $buildings_canBuild = array();
		public $troopsType_canTrain = array();
		public $ships_canBuild = array();
		public $techs_canResearch = array();
		public $ship_atTime = 1;
		public $building_atTime = 1;
		public $tech_atTime = 1;
		public $troops_trainAtTime = 1;
		public $vehicle_atTime = 1;
		public $totalFood = 20000;
		public $totalGold = 1;
		public $totalPopulation =1;
		public $taxRate = 10;
		public $productionRate = 50;
		public $researchBonus = 1;
		public $researching = array();
		public $baseRace = 'Human';
		public $otherRaces = array();
		public $civYear = 1;
		public $civMonth = 1;
		public $civName = 'Dragon Warriors';
		public $civBonuses = array();
		public $numberPuppetStates = 0;
		public $leader = array();
		public $pc_civ = TRUE;
		public $civType = array();
		public $govType = array();
		public $starving = FALSE;
		public $happiness = 'Satisfied';
		public $score = 100;
	}
	
	class myclass {
		public $funnyguy = 'Dusty, jhadur, erg..., whatever';
	}

$obj1 = new world;
$obj2 = new civ;
echo "<p>";
var_dump($obj1);
echo "</p><br><p>";
var_dump($obj2);	
echo "</p>";

$obj3 = new myclass;
var_dump($obj3);

echo '<p>' . $obj1->battle . '</p>';

?>
