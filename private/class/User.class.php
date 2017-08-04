<?php
require_once("../../../private/config.php");
require_once(CLASS_DIR."Tools.class.php");
require_once(CLASS_DIR."SQManager.class.php");

class User
{
	private $vEmail, $vPass, $vHash, $sTools, $man, $log, $usr;
	
	public function setLogin($email, $password){
		$this->sTools = new Tools;
		$this->man = new SQManager;
		
	 	$this->vEmail = $this->sTools->setCheckEmail($email);
		$this->vPass = $this->sTools->setCheckPass($password);
		
		if($this->vEmail != $email){
			return $this->vEmail;
		} else		
		if(strlen($password) < 1){
			return 'Digite a sua senha';
		}
		
		if($this->vPass == $password){
			$this->log = $this->man->select(USERS_ID.','.USERNAME.','.USERS_SHORT_NAME,TABLE_USERS, 'WHERE `'.USERS_EMAIL.'`=? && `'.USERS_PASS.'`=?',
								array($this->vEmail, $this->sTools->slakrypt($password)));
		} else {
			$this->log = false;
		}
		

		if($this->log && ($this->log->rowCount() == 1)){
			foreach($this->log as $this->usr){
				session_id(SESSION_ID);
				session_name(SESSION_NAME);	
				session_start();
				$_SESSION['user'] = $this->usr;			
			}
		} else {
			return 'Usuário ou senha incorretos';
		}
		
	}
}

?>