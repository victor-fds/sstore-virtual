<?php
require_once"require/config/Config.php";
require_once"require/class/SQManager.class.php";

class CatManager extends SQManager
{
	
	private $man;
	
	public function getNavCat(){		
		$this->man = new SQManager;
		return $this->man->select('*',MAIN_NAV_TABLE,'ORDER BY `'.MAIN_NAV_ORDER.'` LIMIT 15',array());
	}
	
	public function getFirstOrLast($first){		
		$this->man = new SQManager;
		return $this->man->select('*',MAIN_NAV_TABLE,'WHERE `'.MAIN_NAV_TYPE.'`=? LIMIT 1',array($first));
	}
	
	public function getNavLinks($id){
		$this->man = new SQManager;
		return $this->man->select('*',MAIN_NAV_ALINKS_TABLE,
										'WHERE `'.MAIN_NAV_ALINKS_ARRAY_ID.'`=? ORDER BY id_ LIMIT 6',array($id));
	}
}

?>