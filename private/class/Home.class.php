<?php
class Home
{
	
	private $man;
	
	function getComments($id){
		$this->man = new SQManager;
		if(!empty($id))
		return $this->man->select('*',HOME_PROD_COMMENT_TABLE,'WHERE `'.HOME_PROD_COMMENT_PRODID.'`=? LIMIT 5',array($id));
	}
	
	function getRelated($id){
		$this->man = new SQManager;
		if(!empty($id))
		return $this->man->select('*',HOME_ASIDE_TABLE,'WHERE `'.HOME_ASIDE_CATEGORY.'`=? LIMIT 4',array($id));
	}
	
	function getRatings($id){
		$this->man = new SQManager;
		if(!empty($id))
		return $this->man->select('*',HOME_PROD_RAT_TABLE,'WHERE `'.HOME_PROD_RAT_ID.'`=? LIMIT 1',array($id));
		return $this->man->select('*',HOME_PROD_RAT_TABLE,'ORDER BY `'.HOME_PROD_RAT_WE5.'`',array());
	}
	
	function getProducts($id){
		$this->man = new SQManager;
		if(!empty($id))
		return $this->man->select('*',HOME_ASIDE_TABLE,'WHERE `'.HOME_ASIDE_FID.'`=? LIMIT 1',array($id));
		return $this->man->select('*',HOME_ASIDE_TABLE,'ORDER BY `'.HOME_ASIDE_FID.'`',array());
	}
	
	public function getBoxItems(){		
		$this->man = new SQManager;
		return $this->man->select('*',HOME_ASIDE_TABLE,'WHERE `'.HOME_ASIDE_HIDE.'`=? ORDER BY `'.DEFAULT_ID.'` DESC LIMIT 2',array(0));
	}
	
	public function getVitrinItems(){		
		$this->man = new SQManager;
		return $this->man->select('*',HOME_ASIDE_TABLE,'WHERE `'.HOME_ASIDE_HIDE.'`=? ORDER BY `'.DEFAULT_ID.'` DESC LIMIT 16',array(0));
	}
	
	public function getSideCategories(){		
		$this->man = new SQManager;
		return $this->man->select('*',HOME_SIDE_CATEGORY_TABLE,'WHERE `'.HOME_SIDE_CATEGORY_HIDE.'`=? ORDER BY `'.HOME_SIDE_CATEGORY_ORDER.'` ASC LIMIT 10',array(0));
	}
	
	public function getSideSubCategories($ref_id){
		$this->man = new SQManager;
		return $this->man->select('*',HOME_SIDE_CATEGORY_LINK,'WHERE `'.HOME_SIDE_CATEGORY_HIDE.'`=? AND `'.HOME_SIDE_CATEGORY_LINK_REF.'`=? ORDER BY `'.HOME_SIDE_CATEGORY_ORDER.'` ASC LIMIT 15',array(0,$ref_id));
	}
	
}

?>