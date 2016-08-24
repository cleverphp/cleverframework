<?php
namespace Core\Config;
class config{

	public function db(){

		return [
			
			'host'=>'localhost',
			'dbname'=>'test',
			'user'=>'root',
			'psd'=>'admin',
			'persistent'=>true
		
		];
	
	}

	public function site(){

		return [



		];

	}

}

return new config;

?>

