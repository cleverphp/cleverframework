<?php
class db{

	private $host;
	private $user;
	private $psd;
	private $dbname;
	private $persistent;
	public static $pdo;

	public function __construct(){

		global $config;

		$db = $config->db();
		$this->host = $db['host'];
		$this->user = $db['user'];
		$this->psd = $db['psd'];
		$this->dbname = $db['dbname'];
		$this->persistent = $db['persistent'];
	
	}
	
	public function connect(){

		$dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;

		try{
			
			self::$pdo = new PDO($dsn,$this->user,$this->psd,array(PDO::ATTR_PERSISTENT=>$this->persistent));

		}catch(PDOException $e){
			
			exit("db error ".$e->getMessage());
		
		}
	
	}


}
return new db;
?>