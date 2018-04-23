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

		//singleton pattern

		if(self::$pdo instanceof PDO){
			return;
		}

		$dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;

		try{
			
			self::$pdo = new PDO($dsn,$this->user,$this->psd,array(PDO::ATTR_PERSISTENT=>$this->persistent));

		}catch(PDOException $e){
			
			//exit("db error ".$e->getMessage());
		
		}
	
	}

	public function query($sql,$data){

		$stmp = self::$pdo->prepare($sql);

		$stmp->execute($data);

		$res = $stmp->fetchAll(PDO::FETCH_ASSOC);
		
		return $res;

	}

	public function execute($sql,$data,$getInsertId=false){
		
		$stmp = self::$pdo->prepare($sql);

		$res = $stmp->execute($data);

		if($getInsertId){
			return self::$pdo->lastInsertId();
		}

		return $res;

	}

}
return new db;
?>
