<?php

require_once"../require/class/SQManager.class.php";
require_once"../require/config/Config.php";

class AdManager
{
	private $man;
	
	function getMenuCat($id){
		$this->man = new SQManager;
		if(!empty($id))
		return $this->man->select('*',MAIN_NAV_TABLE,'WHERE `'.DEFAULT_ID.'`=? LIMIT 1',array($id));
		return $this->man->select('*',MAIN_NAV_TABLE,'ORDER BY `'.DEFAULT_ID.'` LIMIT 40',array());
	}
	
	function deleteMenuCat($id){
		$this->man = new SQManager;
		if(!empty($id))
		$this->man->delete(MAIN_NAV_TABLE,'WHERE `'.DEFAULT_ID.'`=?',array($id));
	}
	
	function deleteBodyCat($id){
		$this->man = new SQManager;
		if(!empty($id))
		$this->man->delete(HOME_SIDE_CATEGORY_TABLE,'WHERE `'.DEFAULT_ID.'`=?',array($id));
	}
	
	function getBodyCat($id){
		$this->man = new SQManager;
		if(!empty($id))
		return $this->man->select('*',HOME_SIDE_CATEGORY_TABLE,'WHERE `'.DEFAULT_ID.'`=? LIMIT 1',array($id));
		return $this->man->select('*',HOME_SIDE_CATEGORY_TABLE,'ORDER BY `'.HOME_SIDE_CATEGORY_ORDER.'` LIMIT 15',array());
	}
	
	function getTopLinks($id){
		$this->man = new SQManager;
		if(!empty($id))
		return $this->man->select('*',MAIN_NAV_ALINKS_TABLE,'WHERE `'.DEFAULT_ID.'`=? LIMIT 1',array($id));
		return $this->man->select('*',MAIN_NAV_ALINKS_TABLE,'ORDER BY `'.MAIN_NAV_ALINKS_ORDER.'` LIMIT 15',array());
	}
	
	function getProducts($id){
		$this->man = new SQManager;
		if(!empty($id))
		return $this->man->select('*',HOME_ASIDE_TABLE,'WHERE `'.HOME_ASIDE_FID.'`=? LIMIT 1',array($id));
		return $this->man->select('*',HOME_ASIDE_TABLE,'ORDER BY `'.HOME_ASIDE_FID.'`',array());
	}
}

?>