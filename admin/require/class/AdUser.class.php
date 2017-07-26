<?php
require_once"../../../require/class/SQManager.class.php";
require_once"../../../require/class/Tools.class.php";
require_once"../../../require/config/Config.php";

class AdUser
{	
	private $vEmail, $vPass, $sTools, $man, $log, $usr;
	
	public function getAdmin($email, $password){
		session_id(SESSION_ID);
		session_name(SESSION_NAME);	
		session_start();
		
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
			$this->log = $this->man->select(USERS_LEVEL,TABLE_USERS, 'WHERE `'.USERS_EMAIL.'`=? && `'.USERS_PASS.'`=?', array($this->vEmail, $this->sTools->slakrypt($password)));
			
		} else {
			$this->log = false;
		}
		

		if($this->log && ($this->log->rowCount() == 1)){
			foreach($this->log as $this->usr){
				if($this->usr[USERS_LEVEL] > 0){
					if(session_start()) 
						$_SESSION[ADM_LOGIN] = $this->usr[USERS_LEVEL];
					else
						print "Erro de Sessão";
				}
			}
		} else {
			return 'Usuário ou senha incorretos';
		}
		
	}
}

?>