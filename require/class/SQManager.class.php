<?php
/*
function __autoload($class){
	require_once "{$class}.class.php";
	//carrega todas as classes desta pasta
}*/

#$crud->insert('user', 'user=?, email=?', array('nomeDoUser111','emailDoUser@hotmail.com11'));
#$sel = $crud->select('*', 'user', 'WHERE _id=?', array(1));
#$upd = $crud->update('user','user=?,email=? WHERE _id=?',array('Slake','slakeapps.zz.mu',1));
#$del = $crud->delete('user', 'WHERE _id=?', array(2));
#$pass->setCheckPass('asdj..');
#$cpt = new Tools;
#var_dump($cpt->slakrypt('victor'));
#$aa = new User;
#var_dump( $aa->setLogin('slakeapps@zz.mu','victor')) ;

class SQManager
{	
	private $link;
	
	private function setCon(){		
		if(is_null($this->link)){
			/* If it doesnt have a stable connection, try to begin it*/
			try {
			    $this->link=new PDO('mysql:host=localhost;dbname=store', 'root', 'adsse12556');
			    $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    return $this->link;
			} catch (PDOException $e) {
			    echo $e->getMessage();
			}
		} else return $this->link;
	}
		
	public function getCon(){
		return $this->setCon();
	}
	
	private $query;
	
	private function prepExec($prepare, $execute){
			$this->query = $this->getCon()->prepare($prepare);
			$this->query->execute($execute);		
	}
	
	
	public function insert($table, $condition, $exec){
		$this->prepExec('INSERT INTO '.$table.' SET '.$condition.'', $exec);
		return $this->getCon()->lastInsertId();
	}
	
	
	public function select($field, $table, $condition, $exec){
		$this->prepExec('SELECT '.$field.' FROM '.$table.' '.$condition.'', $exec);
		return $this->query;
	}
	
	public function update($table, $condition, $exec){
		$this->prepExec('UPDATE '.$table.' SET '.$condition.'',$exec);
	}
	
	public function delete($table, $condition, $exec){
		$this->prepExec('DELETE FROM '.$table.' '.$condition.'',$exec);
	}
	
}

?>