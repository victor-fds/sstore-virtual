<?php

class Tools
{

	public function setCheckEmail($email){
		if(strlen($email) <= 3)
			return 'Informe um email';
		else
			if(preg_match('/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\-]+\.[a-z]{2,3}$/i',$email))
				return $email;
			else
				return 'Email inválido';
	}
	
	public function setCheckPass($pass){
		if(strlen($pass) < 1)
			return 'Digite sua senha';
		else
			if(preg_match('/^[0-9a-z\.]{6,15}$/i',$pass))
				return $pass;
			else
				return 'Senha inválida';
	}
	
		public function slakrypt($param){
		#$_hash=md5($param); 32 bits	
		#$_hash=sha1($param); 40 bits
		#$_hash=hash('sha256',$param); 64 bits
		#$_hash=hash('sha384',$param); 96 bits
		#$_hash=hash('sha512',$param); 128 bits
		#$_hash=hash('whirlpool',$param); 128 bits
		#'b0'.md5(hash('sha256',sha1(hash('sha384',md5($param))))).'a8'
		return md5($param);
		}
		


}


?>