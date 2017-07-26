<?php
require_once"../../../require/class/SQManager.class.php";
require_once"../../../require/config/Config.php";

class AdManager
{
	/**
	* addproduct.php
	*/
	function attId($id){
		$man = new SQManager;
		$man->update(HOME_ASIDE_TABLE, HOME_ASIDE_FID.'=? WHERE `'.DEFAULT_ID.'`=?', array((30256+$id), $id));
	}	
	
	function addNewProduct($nav_name, $hide, $img_ref, $des, $price, $price2, $price3, $price4){
		if(empty($img_ref)) $img_ref = SRC."/images/products/default.png";
		$man = new SQManager;
		return $man->insert(HOME_ASIDE_TABLE, HOME_ASIDE_NAME.'=?,'.HOME_ASIDE_HIDE.'=?,'.HOME_ASIDE_IMG.'=?,'.HOME_ASIDE_DESC.'=?,'.HOME_ASIDE_PRICE1.'=?,'.HOME_ASIDE_PRICE2.'=?,'.HOME_ASIDE_PRICE3.'=?,'.HOME_ASIDE_PRICE4.'=?', array($nav_name, $hide, $img_ref, $des, $price, $price2, $price3, $price4));
	}
	
	/****************
	* menubody.php
	* @return
	*/	
	function setBodyCat($id, $nav_name, $array){
		$man = new SQManager;
		$man->update(HOME_SIDE_CATEGORY_TABLE, HOME_SIDE_CATEGORY_NAME.'=?,'.HOME_SIDE_CATEGORY_REF.'=? WHERE `'.DEFAULT_ID.'`=?', array($nav_name, $array, $id));
	}
	
	function addBodyCat($nav_name, $array){
		$man = new SQManager;
		return $man->insert(HOME_SIDE_CATEGORY_TABLE, HOME_SIDE_CATEGORY_NAME.'=?,'.HOME_SIDE_CATEGORY_REF.'=?', array($nav_name, $array));
	}
	
	
	/********************
	* menunav.php
	* @return
	*/
	function deleteMenuCat($id){
		$man = new SQManager;
		$man->delete(MAIN_NAV_TABLE, 'WHERE `'.DEFAULT_ID.'`=?', array($id));
	}
	
	function setMenuCat($id, $link_array, $name, $img_ref, $title, $desc){
		$man = new SQManager;
		$man->update(MAIN_NAV_TABLE, MAIN_NAV_LINK_ARRAY_ID.'=?,'.MAIN_NAV_NAME.'=?,'.MAIN_NAV_IMG_REF.'=?,'.MAIN_NAV_TITLE.'=?,'.MAIN_NAV_DES.'=? WHERE `'.DEFAULT_ID.'`=?', array($link_array,$name, $img_ref, $title, $desc, $id));
	}
	
	function addMenuCat($nav_name, $type, $hide, $img_ref, $title, $des, $array_id){
		$man = new SQManager;
		return $man->insert(MAIN_NAV_TABLE, MAIN_NAV_NAME.'=?,'.MAIN_NAV_TYPE.'=?,'.MAIN_NAV_HIDE.'=?,'.MAIN_NAV_IMG_REF.'=?,'.MAIN_NAV_TITLE.'=?,'.MAIN_NAV_DES.'=?,'.MAIN_NAV_LINK_ARRAY_ID.'=?', array($nav_name, $type, $hide, $img_ref, $title, $des, $array_id));
	}
}

	/**********
	* addproduct.php
	* 
	*/
	if(!empty($_POST['nav_name']) && !empty($_POST['des']) && !empty($_POST['price']) && !empty($_POST['price2']) && !empty($_POST['price3']) && !empty($_POST['price4']) && ($_POST['sec'] == 1008716)){
		$make = new AdManager;
		if($make->addNewProduct($_POST['nav_name'], $_POST['hide'], $_POST['img_ref'], $_POST['des'], $_POST['price'], $_POST['price2'], $_POST['price3'], $_POST['price4'])){
			//if susceed storing, edit this fakeid
			$lastId = $make->lastInsertId();
			if($make->attId($lastId))
				print "Sucesso em cadastrar o produto";
			else
				print "Erro conhecido ao cadastrar o produto";
		}
		else
			print "Erro em cadastrar o produto";
	}

	/*******************
	* menunav.php
	*/
	/* Alter Menu Nav*/
	if(!empty($_POST['id']) && !empty($_POST['nav_name']) && !empty($_POST['img_ref']) && !empty($_POST['title']) && !empty($_POST['des']) && !empty($_POST['link_array_id_'])){
		$make = new AdManager;
		$make->setMenuCat($_POST['id'], $_POST['link_array_id_'], $_POST['nav_name'], $_POST['img_ref'], $_POST['title'], $_POST['des']);
	}

	/* Add Menu Nav	*/
	if(!empty($_POST['nav_name']) && !empty($_POST['img_ref']) && !empty($_POST['title']) && !empty($_POST['des']) && !empty($_POST['link_array_id_']) && ($_POST['sec'] == 3256008)){
		$make = new AdManager;
		$make->addMenuCat($_POST['nav_name'], $_POST['typeA'], $_POST['hide'], $_POST['img_ref'], $_POST['title'], $_POST['des'], $_POST['link_array_id_']);
	}
	
	
	/************************
	* menubody.php
	*/
	/* Alter Menu Body*/
	if(!empty($_POST['id']) && !empty($_POST['nav_name']) && !empty($_POST['array_id']) && ($_POST['sec'] == 38655)){
		$make = new AdManager;
		$make->setBodyCat($_POST['id'], $_POST['nav_name'], $_POST['array_id']);
	}
	/* Add new Menu Body*/
	if(!empty($_POST['nav_name']) && !empty($_POST['array_id']) && ($_POST['sec'] == 456872)){
		$make = new AdManager;
		$make->addBodyCat($_POST['nav_name'], $_POST['array_id']);
	}
	
?>