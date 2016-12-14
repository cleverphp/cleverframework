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

	public function query($sql){

		$arr = array();

		$res = self::$pdo->query($sql);
		
		if($res){
			foreach($res as $v){

				array_push($arr,$v);
			
			}
		}

		return $arr;

	}

	public function execute($sql){
		
		//do not use the return value,value represent the lines affected while not means whether the results is success or fail
		return self::$pdo->exec($sql);//return the affected rows,at the most time,successful means return not 0,that says 0 is fail except for empty exec()

	}

}
return new db;
?>
